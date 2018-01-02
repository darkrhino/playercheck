<?php

namespace PlayerCheck\Http\Controllers\Auth;

use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use PC\User\User;
use PlayerCheck\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use PlayerCheck\Mail\User\Admin\Welcome;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        //$data['date_of_birth'] = $data['dob_y'].'-'.$data['dob_m'].'-'.$data['dob_d'];

        return Validator::make($data, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
            /*'date_of_birth' => 'required|date|before:'.Carbon::today()->addYears(-18)->format('Y-m-d'),*/
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        //$data['date_of_birth'] = $data['dob_y'].'-'.$data['dob_m'].'-'.$data['dob_d'];

        $user = User::create([
            'last_name' => ucfirst($data['last_name']),
            'first_name' => ucfirst($data['first_name']),
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            /*'date_of_birth' => $data['date_of_birth'],*/
        ]);

        Mail::to($user)->send(new Welcome($user));

        return $user;


    }
}
