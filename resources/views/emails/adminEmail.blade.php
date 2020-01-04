<!DOCTYPE html>
    <html lang="en-US">
    	<head>
    		<meta charset="utf-8">
    	</head>
        <body style="margin:5% 20% ">
            <div style="text-align:center;background-color:lightgray; border-radius: 4px; padding:3%">

            
            <h2 style="text-align:center">Dear Admin!</h2>
            <div style="display:flex; justify-content:center">
                <img style="width:100%" src="{{ $message->embed(resource_path().'/img/image131.jpg') }}" alt="NIGERIA SCHOOL WEB IDENTITIY PROJECT" />
            </div>
          
            <p>This is to notify you that the first stage of registration of: <br/>
            {{$client_name}} was successful.
            </p>  
            <h3>Client Details</h3>

            

            <table style="width:100%; border:0px">
                <tr>
                    <td>Full Name:</td>
                    <td>{{$client_name}}</td>
                </tr>

                <tr>
                    <td>Email Address:</td>
                    <td>{{$client_email}}</td>
                </tr>

                <tr>
                    <td>Clint ID</td>
                    <td>{{$generatedschoolID}}</td>
                </tr>

                <tr>
                    <td>Clint Package</td>
                    <td>{{$nswipPackage}}</td>
                </tr>

                <tr>
                    <td>Payemnt Status</td>
                    <td style="background:red; color:white">Not Paid</td>
                </tr>
            </table>
            <a href="http://nswip.org.ng/">View more details</a>
            </div>
    	</body>
    </html>