<?php

namespace App\Exports;
use App\Registration;
use Maatwebsite\Excel\Concerns\FromCollection;
// use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Facades\Excel;
// class registrationData implements FromCollection ToModel, WithHeadingRow
class registrationData implements FromCollection, WithHeadingRow

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Registration::all();
        return $registration =  Registration::get();
        // $registration_array[]= array('Surname','Middle Name','First Name','Email','School Registration Name','Name Of School','School Category','School ID','School RC No.','Official Email','School Address','Propritor/Principal Name','Tax Rate','Tax Id','Business Tel','Agent ID','Nswip Package','Setup Configuration','Domain Name','File Upload');
        $registration_array  = collect();
        foreach($registration as $regData){
         $registration_array->push([
              'Surname' =>$regData->surname,
              'Middle Name' =>$regData->middlename ,
              'First Name' =>$regData->firstname,
              'Email' =>$regData->email,
              'School Registration Name' =>$regData->schoolRegName,
              'Name Of School' =>$regData->nameOfSchool,
              'School Category' =>$regData->schoolCat,
              'School ID' =>$regData->schoolID,
              'School RC No.' =>$regData->schoolRCNo,
              'Official Email' =>$regData->officialEmail,
              'School Address' =>$regData->schoolAddress,
              'Propritor/Principal Name' =>$regData->propritorName,
              'Tax Rate'=>$regData->taxRate,
              'Tax Id' =>$regData->taxId,
              'Business Tel' =>$regData->businessTel ,
              'Agent ID' =>$regData->agentID,
              'Nswip Package' =>$regData->nswipPackage,
              'Setup Configuration' =>$regData->setupConfig,
              'Domain Name' =>$regData->domain
            //   'File Upload' =>$regData->fileUpload
       ]);
 
      }
      

    //   Excel::store('Registration Data', function($excel)use($registration_array){
    //         $excel->setTitle('Registration Data');
    //         $excel->sheet('Registration Data', function ($sheet)use ($registration_array){
    //             $sheet->formArray($registration_array, null,'A1', false, false);
    //         });
            
    //     });
    }
}
