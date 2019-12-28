<?php

namespace App\Http\Controllers;
use Mail;
// // use Illuminate\Http\Request;
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
use App\Mail\TestEmail;
use Illuminate\Support\Facades\Request;
class PhpmailerController extends Controller
{
    // public function mailsend()
    // {
    //     $details = [
    //         'title' => 'Title: Mail from Real Programmer',
    //         'body' => 'Body: This is for testing email using smtp'
    //     ];

    //     \Mail::to('siddharth.shukla@kreativstreet.com')->send(new sendMail($details));
    //     return view('emails.thanks');
    // }


    public function sendEmail () {


        $data = ['message' => 'This is a test!'];

        Mail::to('john@example.com')->send(new TestEmail($data));


        // $data  = array(['bodyMessage' => 'message']); 
        // Mail::send ('email', $data, function ($message) {
        
        //     $message->from ( 'tjbenbiz@gmail.com', 'Just Laravel' );
            
        //     $message->to ( Request::get ( 'tjbenbiz@gmail.com' ) )->subject ( 'Just Laravel demo email using SendGrid' );
        // } );
        // return Redirect::back ()->withErrors ( [ 
        //         'Your email has been sent successfully' 
        // ] );



    //     // is method a POST ?
  	// if(Request::isMethod('get')) {
    //     //  require '../vendor/autoload.php';
    //     require 'vendor/autoload.php';						// load Composer's autoloader

    //     $mail = new PHPMailer(true);                        // Passing `true` enables exceptions

    //     try {
    //         // Server settings
    //     $mail->SMTPDebug = 0;                               // Enable verbose debug output
    //         $mail->isSMTP();                                // Set mailer to use SMTP
    //         $mail->Host = 'smtp.gmail.com';					// Specify main and backup SMTP servers
    //         $mail->SMTPAuth = true;                          // Enable SMTP authentication
    //         $mail->Username = 'tjbenbiz@gmail.com';             // SMTP username
    //         $mail->Password = 'faithproxx22';              // SMTP password
    //         $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    //         $mail->Port = 587;                                    // TCP port to connect to

    //         //Recipients
    //         $mail->setFrom('tjbenbiz@gmail.com', 'Mailer');
    //         $mail->addAddress('faithakpeghughu@gmail.com', 'Optional name');	// Add a recipient, Name is optional
    //         $mail->addReplyTo('faithakpeghughu@gmail.com', 'Mailer');
    //         // $mail->addCC('his-her-email@gmail.com');
    //         // $mail->addBCC('his-her-email@gmail.com');

    //         //Attachments (optional)
    //         // $mail->addAttachment('/var/tmp/file.tar.gz');			// Add attachments
    //         // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');	// Optional name

    //         //Content
    //         $mail->isHTML(true); 																	// Set email format to HTML
    //         $mail->Subject = Request::input('subject');
    //         $mail->Body    = Request::input('message');						// message
            
	// 			$mail->send();
	// 			return back()->with('success','Message has been sent!');
	// 		} catch (Exception $e) {
	// 			return back()->with('error','Message could not be sent.');
	// 		}
	// 	}
    // 	return view('registration.registration');
  
        }
}
