<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;
use DB;
use Excel;
use App\Exports\registrationData;
// use Maatwebsite\Excel\Facades\Excel;
class ExportExcelController extends Controller
{
    function index(){
        // $registration =  Registration::get();
        // Excel::store(new registrationData(), 'Registration Data.xlsx', 'A1', null, 'private');
        // Excel::store('Registration Data', function($excel)use($registration_array){
        //     $excel->setTitle('Registration Data');
        //     $excel->sheet('Registration Data', function ($sheet)use ($registration_array){
        //         $sheet->formArray($registration_array, null,'A1', false, false);
        //     });
            
        // });
    //     $registration = Registration::all();
    //     $registration_array  = collect();
    //     foreach($registration as $regData){
    //      $registration_array->push([
    //           'Surname' =>$regData->surname,
    //           'Middle Name' =>$regData->middlename ,
    //           'First Name' =>$regData->firstname,
    //           'Email' =>$regData->email,
    //           'School Registration Name' =>$regData->schoolRegName,
    //           'Name Of School' =>$regData->nameOfSchool,
    //           'School Category' =>$regData->schoolCat,
    //           'School ID' =>$regData->schoolID,
    //           'School RC No.' =>$regData->schoolRCNo,
    //           'Official Email' =>$regData->officialEmail,
    //           'School Address' =>$regData->schoolAddress,
    //           'Propritor/Principal Name' =>$regData->propritorName,
    //           'Tax Rate'=>$regData->taxRate,
    //           'Tax Id' =>$regData->taxId,
    //           'Business Tel' =>$regData->businessTel ,
    //           'Agent ID' =>$regData->agentID,
    //           'Nswip Package' =>$regData->nswipPackage,
    //           'Setup Configuration' =>$regData->setupConfig,
    //           'Domain Name' =>$regData->domain
    //         //   'File Upload' =>$regData->fileUpload
    //    ]);
 
    //   }


        
        //     $excel->setTitle('Registration Data');
        //     $excel->sheet('Registration Data', function ($sheet)use ($registration_array){
        //                 $sheet->formArray($registration_array, null,'A1', false, false);
        //             });
        //  });
        // Excel::store(new registrationData(), 'Registration Data.xlsx', 'C:/App/Export');
    //    return Excel::store(new registrationData(), 'Registration Data.xlsx');
        // return view ('registration.registrationConfirm'); 
    }

    function excel(){
        //  $registration =  Registration::get()->toArray();
        //   $registration_array[]= array('Surname','Middle Name','First Name','Email','School Registration Name','Name Of School','School Category','School ID','School RC No.','Official Email','School Address','Propritor/Principal Name','Tax Rate','Tax Id','Business Tel','Agent ID','Nswip Package','Setup Configuration','Domain Name','File Upload');
        // foreach($registration as $regData){
        //     $registration_array[]= array(
        //         'Surname' =>$regData['surname'],
        //         'Middle Name' =>$regData['middlename'] ,
        //         'First Name' =>$regData['firstname'],
        //         'Email' =>$regData['email'],
        //         'School Registration Name' =>$regData['schoolRegName'],
        //         'Name Of School' =>$regData['nameOfSchool'],
        //         'School Category' =>$regData['schoolCat'],
        //         'School ID' =>$regData['schoolID'] ,
        //         'School RC No.' =>$regData['schoolRCNo'],
        //         'Official Email' =>$regData['officialEmail'],
        //         'School Address' =>$regData['schoolAddress'],
        //         'Propritor/Principal Name' =>$regData['propritorName'],
        //         'Tax Rate'=>$regData['taxRate'],
        //         'Tax Id' =>$regData['taxId'],
        //         'Business Tel' =>$regData['businessTel'] ,
        //         'Agent ID' =>$regData['agentID'] ,
        //         'Nswip Package' =>$regData['nswipPackage'],
        //         'Setup Configuration' =>$regData['setupConfig'],
        //         'Domain Name' =>$regData['domain']
        //         // 'File Upload' =>$regData->fileUpload
        //     );
   
        // }
        // Excel::store('Registration Data', function($excel)use($registration_array){
        //     $excel->setTitle('Registration Data');
        //     $excel->sheet('Registration Data', function ($sheet)use ($registration_array){
        //         $sheet->formArray($registration_array, null,'A1', false, false);
        //     });
            
        // });
        
    }
}

