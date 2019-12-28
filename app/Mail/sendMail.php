<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendMail extends Mailable
{
    use Queueable, SerializesModels;
    // public $details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        Mail::send ( 'email', $data, function ($message) {
        
            $message->from ( 'donotreply@demo.com', 'Just Laravel' );
            
            $message->to ( Request::get ( 'toEmail' ) )->subject ( 'Just Laravel demo email using SendGrid' );
        } );
        return Redirect::back ()->withErrors ( [ 
                'Your email has been sent successfully' 
        ] );

        return view('registration.registration');

        // return $this->view('tjbenbiz@gmail.com')->subject('New Registration')->view('registration.registration')->with('data',$this->data);

    }
}
