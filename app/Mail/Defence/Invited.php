<?php

namespace PlayerCheck\Mail\Defence;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use PC\Sites\Site;

class Invited extends Mailable
{
    use Queueable, SerializesModels;

    public $site;

    /**
     * Create a new message instance.
     *
     * @param Site $site
     */
    public function __construct(Site $site)
    {
        $this->site = $site;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.defence.invited')
            ->subject($this->site->name.' has invited you to PlayerCheck');
    }
}
