<?php

namespace App\Http\Controllers;
use Mail;
use App\Mail\sendMail;
use App\Mail\adminEmail;
use Illuminate\Http\Request;
// use App\Exports\registrationData;
// use Maatwebsite\Excel\Facades\Excel;
use App\Registration;
class registrationController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view ('registration.registration');
    }

    public function checkEmail(Request $request){
        if (Registration::where('email', '=', $request->email)->exists()) {
            // return $request->email.'Email exist';
            // return response()->json(['message'=>'Email Exist']);
    
            return $request->email;
         }

    }
    public function store(Request $request){
//         $ajax = $request->headers->get('HTTP_X_REQUESTED_WITH');
// if($ajax != 'xmlhttprequest'){
//  throw new \Exception("This is not an ajax request");
// }else{}
    // Check if email exist
            
            // Generate ID
    $token = 'qwertzuiopasdfghjklyxcvbnmABCDEFGHIJKLMNOPQRSTUVWXYZ123456789abcdefghijklmnopqrstuvwxyz';
    $token = str_shuffle($token);
    $token = substr($token,  0,  3);
    $current_date = date('Ymd');
    $token = $token.'-'.$current_date;

    //Generate OrderID
    $randNUM ='1234567890123456789012345678901234567890';
    $randNUM = str_shuffle($randNUM);
    $randNUM = substr($randNUM, 0, 4);

    $randALP ='abcdefghijklmnopqrstuvwxyz';
    $randALP = str_shuffle($randALP);
    $randALP = substr($randALP, 0, 2);

    $orderId = 'OR'.$randNUM.'-'.$randALP;

            $register = new Registration;
            $register->surname = $request->surname;
            $register->middlename = $request->middlename;
            $register->firstname = $request->firstname;
            $register->email = $request->email;
            $register->schoolRegName = $request->schoolRegName;
            $register->nameOfSchool = $request->nameOfSchool;
            $register->schoolCat = $request->schoolCat;
            $register->schoolID = $request->schoolID;
            $register->schoolRCNo = $request->schoolRCNo;
            $register->officialEmail = $request->officialEmail;
            $register->schoolAddress = $request->schoolAddress;
            $register->propritorName = $request->propritorName;
            $register->taxRate = $request->taxRate;
            $register->taxId = $request->taxId;
            $register->businessTel = $request->businessTel;
            $register->agentID = $request->agentID;
            $register->nswipPackage = $request->nswipPackage;
            $register->setupConfig = $request->setupConfig;
            $register->domain = $request->domain;
            $register->fileUpload = $request->fileUpload;
            $register->generatedschoolID = $token;
            $register->status='pending';
            $register->orderId=$orderId;
            $register->save(); 
        
     
            
    
            $data = [
                'sender_address'=>'support@tectainet.com',
                'subject'=>'NSWIP REGISTRATION CONFIRMATION',
                'sender_name'=>'NSWIP NG',
                
                // 'reply_to'=>$request->email,
                'reply_to'=>'support@tectainet.com',
                'client_name'=>$request->firstname,
                'generatedschoolID'=>$token,
                // 'message' => ''
                
                ];

                $adminData = [
                    'sender_address'=>'support@tectainet.com',
                    'subject'=>'NEW NSWIP REGISTRATION',
                    'sender_name'=>'NSWIP NG',

                    'client_name'=> $request->surname.' '.$request->middlename.' '.$request->firstname,
                    'client_email' => $request->email,
                    'schoolname'=> $request->nameOfSchool,
                    'nswipPackage' =>$request->nswipPackage,
                    'generatedschoolID'=>$token,
                ];
                // ->attachData($path,$filename)
            Mail::to($request->email)->send(new sendMail($data));
            Mail::to('support@tectainet.com')->send(new adminEmail($adminData));
        
       

    }


public function confirm(Request $request){
   
//   $token = 'qwertzuiopasdfghjklyxcvbnmABCDEFGHIJKLMNOPQRSTUVWXYZ123456789abcdefghijklmnopqrstuvwxyz';
//     $token = str_shuffle($token);
//     $token = substr($token,  0,  3);
//     $current_date = date('Ymd');
//   $token = $token.'-'.$current_date;


//     $data = [
//         'sender_address'=>'support@tectainet.com',
//         'subject'=>'NSWIP REGISTRATION CONFIRMATION',
//         'sender_name'=>'NSWIP NG',
        
//         // 'reply_to'=>$request->email,
//         'reply_to'=>'support@tectainet.com',
//         'client_name'=>'king',
//         'generatedschoolID'=>$token,
//         // 'message' => ''
        
//         ];
//   $adminData = [
//                     'sender_address'=>'support@tectainet.com',
//                     'subject'=>'NEW NSWIP REGISTRATION',
//                     'sender_name'=>'NSWIP NG',

//                     'client_name'=> 'Felix',
//                     'client_email' => 'tjbenbiz@gmail.com',
//                     'schoolname'=> '$request->nameOfSchool',
//                     'nswipPackage' =>'$request->nswipPackage',
//                     'generatedschoolID'=>$token,
//                 ];
                
// Mail::to('tjbenbiz@gmail.com')->send(new sendMail($data));
// Mail::to('tjbenbiz@gmail.com')->send(new adminEmail($adminData));
        return view ('registration.registrationConfirm');
    
    
}

public function completeRegistration(){
    // return Route::get('https://login.remita.net/remita/onepage/S0000212149/biller.spa');
    return redirect('https://login.remita.net/remita/onepage/S0000212149/biller.spa');
    // return <a href='/https://login.remita.net/remita/onepage/S0000212149/biller.spa'></a>;
    // return Route::controller('users', 'https://login.remita.net/remita/onepage/S0000212149/biller.spa');
}
}
