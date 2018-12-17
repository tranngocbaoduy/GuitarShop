
$(document).ready(function() {



    $('#name-customer').keyup(function(){
        $('.message-error').html('');
    });
    $('#password-customer').keyup(function(){
        $('.message-error').html('');
    });
    $('#email-customer').keyup(function(){
        $('.message-error').html('');
    });

    $('#create-new-customer').click(function(e){
        var token    = $("input[name=_token]").val();
        var name    = $("input[name=name-customer]").val();
        var email = $("input[name=email-customer]").val();
        // var image = $("input[name=image-customer]").val();
        var password = $("input[name=newpwd-customer]").val();
        var rePass = $("input[name=re-newpwd-customer]").val();
        e.preventDefault();

        // check data
        if(name==''){
            $('.message-error').html("  <td></td>\n'<td><p class=\"alert alert-danger\" style=\"width: 50%;float:right\">Invalid Name</p></td>");
            $('#name-customer').focus();
            return false;
        }else if(email ==''){
            $('.message-error').html("  <td></td>\n'<td><p class=\"alert alert-danger\" style=\"width: 50%;float:right\">Invalid Email</p></td>");
            $('#email-customer').focus();
            return false;
        }else if(password ==''){
            $('.message-error').html("  <td></td>\n'<td><p class=\"alert alert-danger\" style=\"width: 50%;float:right\">Invalid Password</p></td>");
            $('#password-customer').focus();
            return false;
        }

        if (!validateEmail(email)){
            $('.message-error').html("  <td></td>\n'<td><p class=\"alert alert-danger\" style=\"width: 50%;float:right\">Invalid Email. Format Email : abc@gmail.com</p></td>");
            $('#email-customer').focus();
            return false;
        }
        // else if(image ==''){
        //     $('.message-error').html("  <td></td>\n'<td><p class=\"alert alert-danger\" style=\"width: 50%;float:right\">Invalid Image</p></td>");
        //     $('#image-customer').focus();
        //     return false;
        // }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var data = {
            _token:token,
            nameUser:name,
            email:email,
            // imageUser:image,
            password:password,
            rePass:rePass,
        };
        // Ajax Post
        $.ajax({
            type: "post",
            url: "/customerSignUp",
            data: data,
            cache: false,
            success: function (data)
            {
                console.log('login request sent !');
                console.log('message: ' + data.message);

                if(data.status) {
                    window.location.assign('/admin/viewAllCustomer');
                }else{
                    $('.message-error').html("<td></td>\n'<td><p class=\"alert alert-danger\" style=\"width: 50%;float:right\">"+data.message+"</p></td>");
                    $('#name-customer').focus();
                }
            },
            error: function (data){
                alert('Fail to run Login..');
                console.log(data);
            }
        });

        return false;
    });
    // check password
    $('#re-newpwd-customer').keyup(function(){
        let p1 =  $('#newpwd-customer').val();
        let p2 = $('#re-newpwd-customer').val();
        if(p1!==p2 ){
            $('.message-error').html("  <td></td>\n'<td><p class=\"alert alert-danger\" style=\"width: 50%;float:right\">Password don't match</p></td>");
        }else{
            $('.message-error').html('');
        }
    });

});