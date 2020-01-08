<!DOCTYPE html>
    <html lang="en-US">
    	<head>
    		<meta charset="utf-8">
    	</head>
        <body style="margin:5% 20% ">
            <div style="text-align:center;background-color:lightgray; border-radius: 4px; padding:3%">

            
            <h2 style="text-align:center">THANK YOU FOR CHOOSING US</h2>
            <div style="display:flex; justify-content:center">
               <img style="width:100%" src="{{ $message->embed(resource_path().'/img/image131.jpg') }}" alt="NIGERIA SCHOOL WEB IDENTITIY PROJECT" />
                
               
            </div>
           
            <div>
                    
            <p>Your School ID Code is: <span style="font-weight:900">{{$generatedschoolID}}</span></p>
            <hr>
            <P style="font-size:20px">Please click on the below link to make payment and complete registration<a href="https://login.remita.net/remita/onepage/S0000212149/biller.spa">https://login.remita.net/remita/</a>  :<br/><br>
                <div>
                        <img src="{{$message->embed(resource_path().'/img/remitaPay.jpeg')}}" alt="REMITA PAY IMAGE ICON"/>
                        {{-- 0148991672(GTBANK)<br>
                        0696544334(ACCESSBANK)<br>
                        0122211218(WEMABANK)<br><hr>
                        ACCOUNT NAME - TECTAINET TECHNOLOGIES --}}
                </div>
             

                <br/><br>
                <button style="padding:2%; border-radius:4px; border:0; background-color:green">
                        <a href="https://login.remita.net/remita/onepage/S0000212149/biller.spa" style="text-decoration:none; color:#fff;">COMPLETE REGISTRATION</a>
                </button>
                
            </P>
            </div>
        </div>
    	</body>
    </html>