<?php

namespace PlayerCheck\Http\Controllers\AJAX\Users;

use Carbon\Carbon;
use Illuminate\Http\Request;
use PlayerCheck\Http\Controllers\Controller;
use PC\Request\Request as Requesting;

class RequestController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if($user->requests->where('expires_at', '>', Carbon::now())->count() > 0){

            $requests = collect();

            foreach($user->requests->where('expires_at', '>', Carbon::now()) as $request){

                if($request->claimed){
                    $array = [
                        'code' => $request->code,
                        'claimed_by' => $request->claimed->name,
                        'claimed_at' => $request->claimed_at->format('d/m/Y H:i:s'),
                        'generated' => $request->created_at->format('d/m/Y H:i:s'),
                        'expires' => $request->expires_at->format('d/m/Y H:i:s'),
                        'feedback' => '',
                    ];
                }else{
                    $array = [
                        'code' => $request->code,
                        'claimed_by' => 'Unclaimed',
                        'claimed_at' => 'N/A',
                        'generated' => $request->created_at->format('d/m/Y H:i:s'),
                        'expires' => $request->expires_at->format('d/m/Y H:i:s'),
                        'feedback' => 'N/A',
                    ];
                };

                $requests->push($array);
            }

            $request = [
                'requests' => $requests
            ];

            return response()->json($request);

        }

        $request = [
            'requests' => []
        ];

        return response()->json($request);
    }

    public function store(Request $request)
    {
        $user = auth()->user();

        if($user->requests->where('expires_at', '>', Carbon::now())->count() >= 5){
            $request = [
                'swal_state' => 'error',
                'swal_title' => 'Max Generated Codes',
                'swal_body' => 'You can not generated any more codes, you have maxed your unused codes.',
                'request' => $request
            ];

            return response()->json($request);

        }elseif($user->requests->where('expires_at', '>', Carbon::now())->count() < 5){

            $request = Requesting::create([
                'code' => base64_encode(openssl_random_pseudo_bytes(32)),
                'user_id' => $user->id,
                'expires_at' => Carbon::now()->addHours(72)
            ]);

            $array = [
                'code' => $request->code,
                'claimed_by' => 'Unclaimed',
                'claimed_at' => 'N/A',
                'generated' => $request->created_at->format('d/m/Y H:i:s'),
                'expires' => $request->expires_at->format('d/m/Y H:i:s'),
                'feedback' => 'N/A',
            ];

            $request = [
                'swal_state' => 'success',
                'swal_title' => 'New Code Generated',
                'swal_body' => 'You can now use the generated code to validate yourself.',
                'request' => $array
            ];

            return response()->json($request);
        }
    }

    public function test(Request $request)
    {
        $code = $request->input('code');

        $request = Requesting::where('code', $code)->get();

        if($request->count() > 0){
            $request = $request->first();

            $request = [
                'msg' => $request
            ];

            return response()->json($request);
        }

        $request = [
            'msg' => $code
        ];

        return response()->json($request);
    }
}
