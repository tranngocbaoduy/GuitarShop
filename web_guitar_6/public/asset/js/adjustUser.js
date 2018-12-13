$(document).ready(function() {

    // load category
    


    $('#update-user').click(function(e){

        var token    = $("input[name=_token]").val();
        var name    = $("input[name=name-user]").val();
        var email = $("input[name=email-user]").val();
        var oldPassword = $("input[name=oldpwd-user]").val();
        var newPassword = $("input[name=newpwd-user]").val();
        var reNewPassword = $("input[name=re-newpwd-user]").val();
        e.preventDefault();

        // check data
        if(name==''){
            $('.message-error').html("  <td></td>\n'<td><p class=\"alert alert-info\" style=\"width: 50%;float:right\">Invalid Name</p></td>");
            $('#name-user').focus();
            return false;
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var data = {
            _token:token,
            nameUser:name,
            emailUser:email,
            oldPassword:oldPassword,
            newPassword:newPassword
        };
        console.log(data);
        // Ajax Post
        $.ajax({
            type: "post",
            url: "/updateUser",
            data: data,
            cache: false,
            success: function (data)
            {
                console.log('login request sent !');
                console.log('message: ' + data.user.password);

                if(data.status) {
                    window.location.assign('/manageUser');
                }else{
                    $('.message-error').html("<td></td>\n'<td><p class=\"alert alert-info\" style=\"width: 50%;float:right\">"+data.message+"</p></td>");
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
});