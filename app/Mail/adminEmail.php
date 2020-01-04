<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class adminEmail extends Mailable
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
        
        $client_email = $this->data['client_email'];
        $clint_name = $this->data['client_name'];
        
      
        return $this->view('emails.adminEmail')
                    ->from($address, $name)
                    ->replyTo($client_email, $client_name)
                    ->subject($subject)
                    ->with([
                        'clint_name'=>$this->$clint_name,
                        'client_email'=>$this->$client_email,
                        'generatedschoolID' =>$this->data['generatedschoolID'],
                        'schoolname'=>$this->data['schoolname'],
                        'nswipPackage'=>$this->data['nswipPackage']
                        ]);

    }
}
