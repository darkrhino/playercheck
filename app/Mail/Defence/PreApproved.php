<?php

namespace PlayerCheck\Mail\Defence;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use PC\Sites\Site;
use PC\User\User;

class PreApproved extends Mailable
{
    use Queueable, SerializesModels;

    public $site;
    public $user;

    /**
     * Create a new message instance.
     *
     * @param Site $site
     * @param User $user
     */
    public function __construct(Site $site, User $user)
    {
        $this->site = $site;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.defence.preapproved')
            ->subject($this->site->name.' has approved you on PlayerCheck');
    }
}
