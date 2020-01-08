<?php

namespace App\Http\Controllers;
use Mail;
use App\Mail\sendMail;
use App\Mail\adminEmail;
use Illuminate\Http\Request;
use App\Exports\registrationData;
use Maatwebsite\Excel\Facades\Excel;
use App\Registration;
class registrationController extends Controller
{
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
//     $token = $token.'-'.$current_date;


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
                
    
// Mail::to('tjbenbiz@gmail.com')->send(new adminEmail($adminData));
        return view ('registration.registrationConfirm');
    
    
}

public function completeRegistration(){
    return view('/home');
}
}
