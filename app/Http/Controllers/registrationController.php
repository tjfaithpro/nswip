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

    public function store(Request $request){
    
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
        $register->save();   

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

public function confirm(){
    $filename = "Registration Data.xlsx";
    
    Excel::store(new registrationData,$filename);
        
    $path = storage_path($filename);

    $data = array('name'=>"byte and bits");      
        
    \Mail::send('registration.registration', $data, function($message) use($path){
            
        $message->to('tjbenbiz@gmail.com')
                    
            ->subject('Sales Register 2019 Excelsheet');
            
        $message->from('faithakpeghughu@gmail.com','byte and bits');
            
        $message->attach($path); 
    });
    // return Excel::download(new registrationData, 'disney.xlsx');
    return view ('registration.registrationConfirm');
}
}
