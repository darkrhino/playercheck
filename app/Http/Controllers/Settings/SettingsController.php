<?php

namespace PlayerCheck\Http\Controllers\Settings;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use PlayerCheck\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('settings.index', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $this->validate($request, [
            'title' => 'required',
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
        ]);

        $user->title = $request->input('title');
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');

        if(!empty($request->input('password'))){
            $this->validate($request, [
                'password' => 'min:6|confirmed',
            ]);
            $user->password = bcrypt($request->input('password'));
        }

        $user->save();

        if(!empty($request->input('password'))){

            Auth::logout();

            return Redirect::route('login')->with('passChanged', '');
        }

        return Redirect::back();
    }
}
