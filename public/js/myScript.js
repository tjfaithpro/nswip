$(document).ready(function(){
    // alert('jk');
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
                    
                }).fail(function(){
                        alert('Form fail to upload, please try again');
                        $('.customLoadingCover').fadeOut();
                });
            });
});