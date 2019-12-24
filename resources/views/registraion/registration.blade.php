@include('layout.header')

<div class="heading">
   <h1>NSWIP REGISTRATION</h1>
 </div>

<div class="registration-page">
    
    <div class="cd-full-width">

    <div class="container">
        <div class="row">
            
           <div class="content first-content" style="width:100vw; padding:2%;">
                
                        {!! Form::open(['action'=>'registraion@store', 'method'=>'POST']) !!}

                        {{--==================== BASIC INFORMATION ============================= --}}
                        <div class="form-group-separation"> 
                                <h3 style="color:gray">Basic Information</h3>
                                <hr style="background-color:black; width:6%; float:left">   
                        <div class="form-group" style="display:inline-flex; flex-wrap:wrap; width:100%; margin:0;padding:0;">
                            
                                <div class="col-md-4">
                                        {!! Form::label('surname', 'Surname') !!}<span style="color:red"> *</span>
                                        {!! Form::text('surname', '', ['class'=>'form-control','placeholder'=>'Surname','required'])!!}
                                </div>

                                <div class="col-md-4">
                                        {!! Form::label('middlename', 'Middle Name') !!}
                                        {!! Form::text('middlename', '', ['class'=>'form-control','placeholder'=>'Middle Name']) !!}
                                </div>

                                <div class="col-md-4">
                                        {!! Form::label('firstname', 'First Name') !!}<span style="color:red"> *</span>
                                        {!! Form::text('firstname', '', ['class'=>'form-control','placeholder'=>'First Name','required']) !!}
                                </div>
                                
                            </div>
                            <br><br>    
                            <div class="form-group">
                                    <div class="form-group">
                                            <div class="col-md-12">
                                                    {!! Form::label('email', 'Email') !!}<span style="color:red"> *</span>
                                                    {!! Form::email('email', '', ['class'=>'form-control','placeholder'=>'Email','required']) !!}
                                            </div>
                                    </div>
                            </div>
                        </div>

                        {{--==================== SCHOOL INFORMATION ============================= --}}
                       
                        <div class="form-group-separation"> 
                                <h3 style="color:gray">School Information</h3>
                                <hr style="background-color:black; width:6%; float:left">   
                        <div class="form-group">
                            
                                <div class="col-md-12">
                                        {!! Form::label('schoolRegName', 'School Registraion Name') !!}<span style="color:red"> *</span>
                                        {!! Form::text('schoolRegName', '', ['class'=>'form-control','placeholder'=>'Enter School Registraion Name','required']) !!}
                                </div>

                                
                            </div>

                            <div class="form-group">
                                        <div class="col-md-12">
                                                        {!! Form::label('nameOfSchool', 'Name of School') !!}<span style="color:red"> *</span>
                                                        {!! Form::text('nameOfSchool', '', ['class'=>'form-control','placeholder'=>'Name of School', 'required']) !!}
                                                </div>
                                        
                            </div>
                            {{-- ================== --}}
                            <br><br>    
                             <div class="form-group" style="display:inline-flex; flex-wrap:wrap; width:100%;">
                                        <div class="col-md-6">
                                                        {!! Form::label('schoolCat', 'School Category') !!}
                                                        <span style="color:red"> *</span>
                                                        @php
                                                              $options =[
                                                                'School Category'=>'School Category','Daycare'=>'Day Care Only',
                                                                'Primaryschool'=>'Full Primary School Only','SecondarySchoo'=>'Secondary School Only','FullSchool'=>'Full Primary and Secondary School','VocatioanlCenter'=>'Vocational Center',
                                                                'Large Enterprise'=>'Full Primary,Secondary,Cambridge',
                                                        ];
        
                                                        $selected = 'School Category';
                                                        @endphp
                                                      
                                                        {!! Form::select('schoolCal', $options, $selected, ['class'=>'form-control']) !!}
                                                </div>

                                            <div class="col-md-6">
                                                    {!! Form::label('schoolID', 'The Generated School ID (CU____)') !!}
                                                    {!! Form::text('schoolID', '', ['class'=>'form-control','placeholder'=>'Enter the Generated School ID (CU____)']) !!}
                                            </div>
                                            
                                           
                                   
                            </div>
                            {{-- ======================= --}}
                            <br><br>    
                             <div class="form-group" style="width:100%; display:inline-flex; flex-wrap:wrap">
                                        <div class="col-md-6">
                                                        {!! Form::label('RCNo', 'RC No/BN as provided by Ministry If Available') !!}
                                                        {!! Form::text('RCNo', '', ['class'=>'form-control']) !!}
                                                </div>

                                            <div class="col-md-6">
                                                    {!! Form::label('officialEmail', 'Official Email') !!}
                                                    {!! Form::email('officialEmail', '', ['class'=>'form-control','placeholder'=>'Official Email']) !!}
                                            </div>
                                            
                                           
                                   
                            </div>
                            <div class="form-group">
                                    <div class="col-md-12">
                                            {!! Form::label('addresss', 'School Address') !!}
                                            <span style="color:red"> *</span>
                                            {!! Form::textarea('schoolAddress','', ['class'=>'form-control', 'required']) !!}
                                    </div>
                            </div>

                            <div class="form-group">
                                        <div class="col-md-12">
                                                        {!! Form::label('propritorName', 'Full Name of Proprietor/Proprietress') !!}
                                                        <span style="color:red"> *</span>
                                                        {!! Form::text('propritorName', '', ['class'=>'form-control','required']) !!}
                                                </div>
                            </div>

                            <div class="form-group">
                                        <div class="col-md-12">
                                                        {!! Form::label('missionStatement', 'School Mission Statement') !!}
                                                        {!! Form::textarea('missionStatement', '', ['class'=>'form-control']) !!}
                                         </div>
                            </div>
                        </div>
                            <div class="form-group-separation"> 
                                        <h3 style="color:gray">More Information</h3>
                                        <hr style="background-color:black; width:6%; float:left">   
                            <div class="form-group" style="width:100%; display:inline-flex; flex-wrap:wrap">
                                        <div class="col-md-6">
                                                        {!! Form::label('taxRate', 'Tax Rate(%) you charge on your school products and services') !!}
                                                        {!! Form::text('taxRate', '', ['class'=>'form-control']) !!}
                                                </div>
                
                                                <div class="col-md-6">
                                                        {!! Form::label('taxId', 'Taxt Identification Number (if available)') !!}
                                                        {!! Form::text('taxId', '', ['name'=>'taxtId','class'=>'form-control']) !!}
                                                </div>
                            </div>
                            <div class="form-group" style="width:100%; display:inline-flex; flex-wrap:wrap">
                                        <div class="col-md-6">
                                                {!! Form::label('businessTel', 'Business Phone Number') !!}
                                                {!! Form::text('businessTel', '', ['class'=>'form-control']) !!}
                                        </div>
                                        <div class="col-md-6">
                                                        {!! Form::label('agentID', 'If signing up through a third party or agent, enter Agent ID') !!}
                                                        {!! Form::text('agentID', '', ['class'=>'form-control', 'placeholder'=>'Agen ID']) !!}
                                                </div>
                                       
                                    </div>
                        <div class="form-group" style="display:inline-flex;flex-wrap:wrap;width:100%">
                                        <div class="col-md-6">
                                                        {!! Form::label('nswipPack', 'NSWIP Packages') !!}
                                                        <span style="color:red"> *</span>
                                                        @php
                                                              $options =[
                                                               'nswipPackages'=>'NSWIP Packages',
                                                               "BANKHUB"=>'Starter',
                                                               "STOCKER"=>'Classic',
                                                               "CDAs"=>'Premium',
                                                        ];
        
                                                        $selected = 'nswipPackages';
                                                        @endphp
                                                      
                                                        {!! Form::select('schoolCal', $options, $selected, ['class'=>'form-control','required']) !!}
                                        </div>

                                        <div class="col-md-6">
                                                        {!! Form::label('setupConfig', 'Choose 1st Stage Setup and Configuration') !!}
                                                        <span style="color:red"> *</span>
                                                        @php
                                                              $options =[
                                                               'Frontend Website Only'=>'Front End Academic Website Only',
                                                               "Frontend With Admin Self Update"=>'Frontend with Admin Self Update',
                                                               "Full self maintain with billing and payement transaction"=>'Selfmaintained with school billing and payment system',
                                                               "Fullweb with Payment and Academic"=>'Self Maintained, Billing and Payment with Academic Activities',
                                                        ];
        
                                                        $selected = 'Frontend Website Only';
                                                        @endphp
                                                      
                                                        {!! Form::select('schoolCal', $options, $selected, ['class'=>'form-control','required']) !!}
                                                </div>
                                        
                        </div>
                        <div class="form-group">
                                <div class="col-md-12">
                                        {!! Form::label('domain', 'Prefered School Domain') !!}
                                        <span style="color:red"> *</span>
                                        {!! Form::text('domain', '', ['class'=>'form-control', 'placeholder'=>'Prefer School Domain(e.g: www.yourschoolname.sch.ng)','required']) !!}
                                </div>

                               
                        </div>

                        <div class="form-group" style="display:inline-flex; flex-wrap:wrap;width:100%">
                                <div class="col-md-6">
                                        {!! Form::label('fileUpload', 'Upload Your Scanned Approval Letter from Government (PNG,JPG or JPEG format only)') !!}
                                        <span style="color:red"> *</span>
                                </div>
                                <div class="col-md-6">
                                      {!! Form::file('fileUpload', ['class'=>'form-control','required']) !!}                                          
                                 </div>
                        </div>
                        </div>

                        <div class="form-group" style="text-align:center; margin-top:4%">
                                <div class="col-md-12">
                                        {!! Form::submit('Submit Application', ['class'=>'btn btn-danger','style'=>'width:50%']) !!}
                                </div>
                        </div>
                     
                        {!! Form::close() !!}
               
            </div>
        </div>
    </div>

</div>
</div>



@include('layout.footer')