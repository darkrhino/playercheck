<?php

namespace PlayerCheck\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use PC\User\User;
use PlayerCheck\Http\Controllers\Controller;

class SocialAuthController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->scopes(['user_location'])->redirect();
    }

    public function callback($provider)
    {
        $user = Socialite::with($provider)->fields(['name', 'email', 'first_name', 'last_name', 'gender', 'age_range', 'location'])->user();

        $userDb = User::where('email', $user->user['email'])->first();
        if ($userDb == null) {
            $userDb = User::create([
                'last_name' => $user->user['last_name'],
                'first_name' => $user->user['first_name'],
                'email' => $user->user['email'],
                'facebook_id' => $user->id
            ]);

            $userDb = User::find($userDb->id);
        }

        Auth::login($userDb);

        return redirect()->intended('dashboard');
    }
}
