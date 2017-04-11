<?php

namespace PlayerCheck\Http\Controllers\Invites;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use PC\User\Invite;
use PC\User\User;
use PlayerCheck\Http\Controllers\Controller;
use PlayerCheck\Mail\Invites\InviteCreated;

class InviteController extends Controller
{
    public function index()
    {
        return view('invites.index');
    }

    public function store(Request $request)
    {
        do {
            //generate a random string using Laravel's str_random helper
            $token = str_random();
        } //check if the token already exists and if it does, try again
        while (Invite::where('token', $token)->first());

        //create a new invite record
        $invite = Invite::create([
            'email' => $request->get('email'),
            'invitee_id' => Auth::user()->id,
            'token' => $token
        ]);

        // send the email
        Mail::to($request->get('email'))->send(new InviteCreated($invite));

        // redirect back where we came from
        return Redirect::back()->with('sent', '');
    }

    public function accept($token)
    {
        if (!$invite = Invite::where('token', $token)->first()) {
            return Redirect::url('/login');
        }

        return view('invite.accept', compact('invite'));
    }
}
