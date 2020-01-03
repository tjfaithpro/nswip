<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
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
        $address = $this->data['sender_address'];
        $subject = $this->data['subject'];
        $name = $this->data['sender_name'];
        
        $address2 = $this->data['reply_to'];
        $name2 = $this->data['client_name'];
        
        $this->subject('NEW NSWIP REGISTRATION')
        ->to('support@tectainet.com')
        ->with($this->data['client_name'].' just registerd <br>Email Address: '.$address2)
        ->replyTo($address2);

        return $this->view('emails.test')
                    ->from($address, $name)
                    // ->cc($address, $name)
                    // ->bcc($address, $name)
                    ->replyTo($address2, $name2)
                    ->subject($subject)
                    ->with(['generatedschoolID' =>$this->data['generatedschoolID']]);



        // return $this->view('tjbenbiz@gmail.com')->subject('New Registration')->view('registration.registration')->with('data',$this->data);

    }
}
