$(document).ready(function() {



    $('#name-user').keyup(function(){
        $('.message-error').html('');
    });
    $('#password-user').keyup(function(){
        $('.message-error').html('');
    });
    $('#email-user').keyup(function(){
        $('.message-error').html('');
    });

    $('#create-new-user').click(function(e){
        var token    = $("input[name=_token]").val();
        var name    = $("input[name=name-user]").val();
        var email = $("input[name=email-user]").val();
        // var image = $("input[name=image-user]").val();
        var password = $("input[name=password-user]").val();
        e.preventDefault();

        // check data
        if(name==''){
            $('.message-error').html("  <td></td>\n'<td><p class=\"alert alert-danger\" style=\"width: 50%;float:right\">Invalid Name</p></td>");
            $('#name-user').focus();
            return false;
        }else if(email ==''){
            $('.message-error').html("  <td></td>\n'<td><p class=\"alert alert-danger\" style=\"width: 50%;float:right\">Invalid Email</p></td>");
            $('#email-user').focus();
            return false;
        }else if(password ==''){
            $('.message-error').html("  <td></td>\n'<td><p class=\"alert alert-danger\" style=\"width: 50%;float:right\">Invalid Password</p></td>");
            $('#password-user').focus();
            return false;
        }

        var mailformat = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';
        if(!email.match(mailformat))
        {
            $('.message-error').html("  <td></td>\n'<td><p class=\"alert alert-danger\" style=\"width: 50%;float:right\">Invalid Email. Format Email : abc@gmail.com</p></td>");
            $('#email-user').focus();
            return false;
        }
        // else if(image ==''){
        //     $('.message-error').html("  <td></td>\n'<td><p class=\"alert alert-danger\" style=\"width: 50%;float:right\">Invalid Image</p></td>");
        //     $('#image-user').focus();
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
            emailUser:email,
            // imageUser:image,
            passwordUser:password,
        };
        // Ajax Post
        $.ajax({
            type: "post",
            url: "/admin/createUser",
            data: data,
            cache: false,
            success: function (data)
            {
                console.log('login request sent !');
                console.log('message: ' + data.message);

                if(data.status) {
                    window.location.assign('/viewAllUser');
                }else{
                    $('.message-error').html("<td></td>\n'<td><p class=\"alert alert-danger\" style=\"width: 50%;float:right\">"+data.message+"</p></td>");
                    $('#name-user').focus();
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
    $('#re-newpwd-user').keyup(function(){
        let p1 =  $('#newpwd-user').val();
        let p2 = $('#re-newpwd-user').val();
        if(p1!==p2 ){
            $('.message-error').html("  <td></td>\n'<td><p class=\"alert alert-danger\" style=\"width: 50%;float:right\">Password don't match</p></td>");
        }else{
            $('.message-error').html('');
        }
    });

});