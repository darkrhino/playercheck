<?php

namespace PlayerCheck\Mail\Invites;

use App\Mail\BeautyMailable;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use PC\User\Invite;

class InviteCreated extends BeautyMailable
{
    use Queueable, SerializesModels;

    public $invite;
    public $url;

    /**
     * Create a new message instance.
     *
     * @param Invite $invite
     */
    public function __construct(Invite $invite)
    {
        $this->invite = $invite;
        $this->url = route('invite.accept', $invite->token);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.invites.created');
    }
}
