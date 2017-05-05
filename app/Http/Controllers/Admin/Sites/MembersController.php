<?php

namespace PlayerCheck\Http\Controllers\Admin\Sites;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use PC\Sites\Site;
use PC\User\User;
use PlayerCheck\Http\Controllers\Controller;

class MembersController extends Controller
{
    public function bulk($id)
    {
        $site = Site::find($id);
        return view('admin.sites.members.bulk', compact('site'));
    }

    public function bulkStore(Request $request, $id)
    {
       // dd($request->input());
        $this->validate($request, [
            'first_name' => 'required|alpha',
            'last_name' => 'required|alpha',
            'email' => 'required|email',
            'dob' => 'required|date',
            'location' => 'required',
        ]);

        $dob = Carbon::createFromFormat('Y-m-d', $request->input('dob'));
        $ukara_date = Carbon::createFromFormat('Y-m-d', $request->input('ukara_date'));
        $bac_date = Carbon::createFromFormat('Y-m-d', $request->input('bac_date'));

        $email_check = User::where('email', $request->input('email'))->first();

        if($email_check){
            $email_check->first_name = $request->input('first_name');
            $email_check->last_name = $request->input('last_name');
            $email_check->dob = $dob;
            $email_check->home_number = $request->input('home_number');
            $email_check->mobile_number = $request->input('mobile_number');
            $email_check->address = $request->input('address');
            $email_check->ukara_number = $request->input('ukara_number');
            $email_check->ukara_date = $ukara_date;
            $email_check->bac_date = $bac_date;
            $email_check->bac_number = $request->input('bac_number');
            $email_check->save();


        }else{

            $new_user = User::create([
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'email' => $request->input('email'),
                'dob' => $dob,
                'home_number' => $request->input('home_number'),
                'mobile_number' => $request->input('mobile_number'),
                'address' => $request->input('address'),
                'ukara_number' => $request->input('ukara_number'),
                'ukara_date' => $ukara_date,
                'bac_date' => $bac_date,
                'bac_number' => $request->input('bac_number'),
            ]);
        }

        return Redirect::route('admin.sites.members.bulk');
    }
}
