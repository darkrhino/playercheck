<?php

namespace PlayerCheck\Mail\Business\Application;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use PC\Business\Business;

class Recived extends Mailable
{
    use Queueable, SerializesModels;

    public $business;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Business $business)
    {
        $this->business = $business;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.business.applications.received')
            ->subject('PlayerCheck Business Application Received');
    }
}
