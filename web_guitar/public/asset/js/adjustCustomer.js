$(document).ready(function() {

    // load category
    
    $('#change-password').click(function () {
        if($('#showHideChangePassword').val() == 0){
            $('.hidden').show('slow');
            $('#showHideChangePassword').val(1)
        }else{
            $('.hidden').hide('slow');
            $('#showHideChangePassword').val(0)
        }
    })

    $('#update-customer').click(function(){
        updateCustomer();
    });
});

function updateCustomer(){
    var token    = $("input[name=_token]").val();
    var name    = $("input[name=name-customer]").val();
    var email = $("input[name=email-customer]").val();
    var oldPassword = $("input[name=oldpwd-customer]").val();
    var newPassword = $("input[name=newpwd-customer]").val();
    var reNewPassword = $("input[name=re-newpwd-customer]").val();
    var address = $("input[name=address-customer]").val();
    var city = $("input[name=city-customer]").val();
    var phone = $("input[name=phone-customer]").val();

    // check data
    if(name==''){
        $('.message-error').html("  <td></td>\n'<td><p class=\"alert alert-info\" style=\"width: 50%;float:right\">Invalid Name</p></td>");
        $('#name-customer').focus();
        return false;
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var data = {
        _token:token,
        name:name,
        email:email,
        oldPassword:oldPassword,
        newPassword:newPassword,
        address: address,
        phone: phone,
        city: city,
    };
    console.log(data);
    // Ajax Post
    $.ajax({
        type: "post",
        url: "/updateCustomer",
        data: data,
        cache: false,
        success: function (data)
        {
            console.log('request sent !');
            console.log('Message: ' + data['message']);
            if(data['status']){
                // window.location.assign('/ajustAccount');
                $('.message-error').html("<td></td>\n'<td><p class=\"alert alert-info\" style=\"width: 50%;float:right\">"+data.message+"</p></td>");
                $('.message-error').show('slow');
                $('.message-error').css('color','black');
            }
        },
        error: function (data){
            alert('Fail to run Login..');
            console.log(data);
        }
    });

    return false;
}