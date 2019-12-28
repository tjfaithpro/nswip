<?php

namespace App\Http\Controllers;

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
     
            // return view ('registration.registrationConfirm');
            //save to excel format
            // $filename = $request->email." Registration Data.xlsx";
            // Excel::store(new registrationData,$filename);
            // $path = storage_path($filename);
    
            $data = [
                'sender_address'=>'support@tectainet.com',
                'subject'=>'NSWIP REGISTRATION CONFIRMATION',
                'sender_name'=>'NSWIP NG',
                
                'reply_to'=>$request->email,
                'client_name'=>$request->firstname,
                'message' => ''
                
                ];
                // ->attachData($path,$filename)
            Mail::to($request->email)->send(new sendMail($data));
      
       

        // $filename = "Registration Data.xlsx";
    
        // Excel::store(new registrationData,$filename);
            
        // $path = storage_path($filename);

        // $data = array('name'=>"byte and bits");      
            
        // \Mail::send('front.mail', $data, function($message) use($path){
                
        //     $message->to('tjbenbiz@gmail.com')
                        
        //         ->subject('Sales Register 2019 Excelsheet');
                
        //     $message->from('faithakpeghughu@gmail.com','byte and bits');
                
        //     $message->attach($path); 
        // });
        // Excel::store(new registrationData(), 'Registration Data.xlsx', 'C:/App/Export');
        // return Excel::download(new DisneyplusExport, 'disney.xlsx');
        //   return Excel::download(new registrationData, 'disney.xlsx');
            // return view ('registration.registrationConfirm');
    }


    // MAIL_DRIVER=smtp
    // MAIL_HOST=smtp.sendgrid.net
    // MAIL_PORT=465
    // MAIL_USERNAME=TJFaith
    // MAIL_PASSWORD=faithproxx22
    // MAIL_ENCRYPTION=ssl

public function confirm(Request $request){

    // $ajax = $request->headers->get('HTTP_X_REQUESTED_WITH');
    // if($ajax != 'xmlhttprequest'){
    //  throw new \Exception("This is not an ajax request");
    // }else{
    //     return 'got';
        // return view ('registration.registrationConfirm');
    // }
    
            
    // $filename = "Registration Data.xlsx";
    
    // Excel::store(new registrationData,$filename);
        
    // $path = storage_path($filename);
    // return $path;

    // $data = array('name'=>"byte and bits");      
        
    // \Mail::send('registration.registration', $data, function($message) use($path){
            
    //     $message->to('tjbenbiz@gmail.com')
                    
    //         ->subject('Sales Register 2019 Excelsheet');
            
    //     $message->from('faithakpeghughu@gmail.com','byte and bits');
            
    //     $message->attach($path); 
    // });
    // return Excel::download(new registrationData, 'disney.xlsx');
    // return view ('registration.registrationConfirm');
}
}
