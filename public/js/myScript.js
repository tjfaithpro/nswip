$(document).ready(function(){
    // Check if email exist
    
    $( "[name='email']").keyup(function(){
                        var email2 = $( "[name='email']").val();
                       
                        $.ajax({
                        headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
                        type:'GET',
                        url:'/checkEmail',
                        data:{email:email2},
                        async:true,
                        beforeSend:function(){
                        }
                        
                }).done(function(data){
                        $existEmail = data;
                        if($( "[name='email']").val()!=''){

                        
                        if ($existEmail == email2){
                            $('#errorMsg').html('Sorry email Exist, please login to proceed');
                            $('.regBTN').attr("disabled", true);
                        }else if($existEmail=='' & data =='') {
                            $('#errorMsg').html('');
                            $('.regBTN').attr("disabled", false);
                        }
                    }else{
                        $('#errorMsg').html('');
                        $('.regBTN').attr("disabled", false);
                    }
                }).fail(function(){
                    $('#errorMsg').html("fail");
                });
            });

    $('.registrationForm').submit(function(event){
                event.preventDefault();
                $.ajax({
                        headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
                        type:'POST',
                        url:'/register',
                        data: new FormData(this),
                        contentType:false,
                        cache:false,
                        async:true,
                        processData:false,
                        beforeSend:function(){
                          $('.customLoadingCover').fadeIn();
                        }
                      
                        
                }).done(function(data){
                    window.location='/registrationConfirm';
                    $('.customLoadingCover').fadeOut();
                    
                }).fail(function(data){
                        // alert(data);
                        alert('Form fail to upload, please try again');
                        $('.customLoadingCover').fadeOut();
                });
            });
});