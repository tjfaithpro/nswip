<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class adminEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $client_name = $this->data['client_name'];
        $address2 = $this->data['reply_to'];

        $this->subject('NEW NSWIP REGISTRATION')
        ->to('support@tectainet.com')
        ->with($client_name.' just registerd <br>Email Address: '.$address2)
        ->replyTo($address2);
    }
}
