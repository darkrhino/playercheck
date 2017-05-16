<?php

namespace PlayerCheck\Http\Controllers\Admin\Sites;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use PC\Defences\Defence;
use PC\Defences\External;
use PC\Sites\Site;
use PC\User\Reset;
use PC\User\User;
use PlayerCheck\Http\Controllers\Controller;
use PlayerCheck\Mail\Defence\Invited;
use PlayerCheck\Mail\Defence\PreApproved;

class MembersController extends Controller
{

    public function index($id)
    {
        $site = Site::find($id);

        $auth = Auth::user();

        Mail::to($auth)->send(new PreApproved($site, $auth));

        return view('admin.sites.members.index', compact('site'));
    }

    public function create($id)
    {
        $site = Site::find($id);

        return view('admin.sites.members.create', compact('site'));
    }

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

        $site = Site::find($id);
        $auth = Auth::user();

        $dob = Carbon::createFromFormat('Y-m-d', $request->input('dob'));

        if($request->input('ukara_date')){
            $ukara_date = Carbon::createFromFormat('Y-m-d', $request->input('ukara_date'));
        }else {
            $ukara_date = null;
        }

        if($request->input('bac_date')){
            $bac_date = Carbon::createFromFormat('Y-m-d', $request->input('bac_date'));
        }else{
            $bac_date = null;
        }

        $email_check = User::where('email', $request->input('email'))->first();

        if($email_check){

            $email_check->first_name = $request->input('first_name');
            $email_check->last_name = $request->input('last_name');
            $email_check->dob = $dob;
            $email_check->home_number = $request->input('home_number');
            $email_check->mobile_number = $request->input('mobile_number');
            $email_check->address = $request->input('location');

            $email_check->save();

            $user = $email_check;

        }else{

            $new_user = User::create([
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'email' => $request->input('email'),
                'dob' => $dob,
                'home_number' => $request->input('home_number'),
                'mobile_number' => $request->input('mobile_number'),
                'address' => $request->input('address'),
            ]);

            Reset::create([
                'email' => $new_user->email,
                'token' => str_random(64)
            ]);

            $user = User::find($new_user['id']);
        }

        if($request->input('bac_number') && $bac_date != null){
            Defence::create([
                'user_id' => $user->id,
                'site_id' => $site->id,
                'defence_id' => 3,
                'vaild_at' => $bac_date,
                'defence_membership_id' => $request->input('bac_number'),
                'created_by_id' => $auth->id
            ]);
        }

        if($request->input('ukara_number') && $ukara_date != null){
            Defence::create([
                'user_id' => $user->id,
                'site_id' => $site->id,
                'defence_id' => 2,
                'vaild_at' => $ukara_date,
                'expires_at' => $ukara_date->addYears(1),
                'defence_membership_id' => $request->input('ukara_number'),
                'created_by_id' => $auth->id
            ]);
        }

        if(!$site->members->contains($user->id)){
            $site->members()->attach($user->id, ['added_by_id' => $auth->id]);
        }

        if($site->approved_at != null){
            Defence::create([
                'user_id' => $user->id,
                'site_id' => $site->id,
                'defence_id' => 1,
                'vaild_at' => Carbon::now(),
                'expires_at' => Carbon::now()->addYears(1),
                'defence_membership_id' => null,
                'created_by_id' => $auth->id
            ]);
            //if(env('APP_ENV') == 'production'){
                Mail::to($user)->send(new PreApproved($site));
            //}
        }else{
            //if(env('APP_ENV') == 'production'){
                Mail::to($user)->send(new Invited($site));
            //}
        }


        return Redirect::route('admin.sites.members.index', $site->id)->with('success', '');
    }
}
