//alert("Dating");
$(document).ready(function(){
    
    $(".show-register-form").click(function(){
        $(".signup-block").attr('style','display:block;');
        $(".signup-block").addClass('bounceInDown');
        $(this).hide();
        $(".mob-btn-log").hide();
    });
    passwordStrenghtOnKeyup();
    $(".register").click(function(){
        var isvalid=true;
        $("input").keyup(function(){
            var id=$(this).attr('id');
            $(".error-"+id).html('');
        });
        passwordStrenghtOnKeyup();
        
        if(!isValidEmailAddress($("#email").val()))
        {
            $(".error-email").html('Oops! your email id is not valid.');
            isvalid=false;
        }
       
        $('.error-password').html("");
        $(".error-password").removeAttr('style');

        $("input").each(function(){
            if($(this).val()==""){
                if($(this).attr('id')=="email")
                {
                    $(".error-email").html('Oops! you missed your email id.');
                }
                if($(this).attr('id')=="username")
                {
                    $(".error-username").html('Oops! you missed the username.');
                }
                if($(this).attr('id')=="password")
                {
                    $(".error-password").html('Oops! you missed the password.');
                }
                isvalid=false;
            }
        });

        if(($("#password").val()).length>0 && ($("#password").val()).length<6)
        {
            $(".error-password").html('Oops! password should be atleast 6 characters.');
            isvalid=false;
        }
        if(isvalid){
            // username 	: kgh9578@tghj
            // password		: 8h54jhgjh@7$
            var data={
                'type':'register',
                'looking':$('#looking').val(),
                'age':$('#age').val(),
                'email':$('#email').val(),
                'livein':$('#livein').val(),
                'kgh9578@tghj':$('#username').val(),
                '8h54jhgjh@7$':$('#password').val(),
            };
            $.ajax({
                url:BASEURL+"dating/",
                    type:'POST',
                    data:data,
                    dataType:'json',
                    success:function(response){
                        if(response.status=="success")
                        {
                            $(".error-notification").attr('style','color:#00FF00;');
                            $(".error-notification").html(response.message);
                        }
                        else
                        {
                            $(".error-notification").removeAttr('style');
                            $(".error-notification").html(response.message);
                        }
                    }
            });
        }
    });

    function passwordStrenghtOnKeyup()
    {
        $("#password").keyup(function(){
            var number = /([0-9])/;
            var alphabets = /([a-zA-Z])/;
            var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
            if($('#password').val().length<6) {
                $(".error-password").html('Oops! password should be atleast 6 characters.');
                $(".error-password").attr('style','color:#FF0000;');
            } else {  	
                if($('#password').val().match(number) && $('#password').val().match(alphabets) && $('#password').val().match(special_characters)) {
                    $(".error-password").html('Strong');
                    $(".error-password").attr('style','color:#00FF00;');
                } else {
                    $('.error-password').html("Medium (should include alphabets, numbers and special characters.)");
                    $(".error-password").attr('style','color:#e5ea0c;');
                }
            }
        });
    }
    function isValidEmailAddress(email) 
    {
        var pattern = new RegExp(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/);
        return pattern.test(email);
    }

    $("form#uploadPic").submit(function(e) {
        e.preventDefault();    
        var formData = new FormData(this);
    
        $.ajax({
            url:BASEURL+"dating/",
            type: 'POST',
            data: formData,
            success: function (data) {
                alert(data)
            },
            cache: false,
            contentType: false,
            processData: false
        });
    });
    

    $(".upload_photo").click(function(){
       $(".upload_images").trigger('click');
    });
});