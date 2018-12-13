
// $(document).ready(function () {
//     $('.wrong-sign-in').on("change",function(){
//         $("#error-message").html("<?= $message?>")
//         $("#error-message").css("display","block");
//
//     });
//
// });
$("#email").keyup(function () {
    $('.message-error').hide('slow');
});
$("#password").keyup(function () {
    $('.message-error').hide('slow');
});

let check = localStorage.getItem('tokenCustomer');
if(check != null){
    window.location.assign('/home');
}
$('.btn-submit').click(function() {

    if($("#email").val()==''){
        $('.message-error').html( 'Please enter your name');
        $('.message-error').show('slow');
        $('#email').focus();
        return false;
    }else if($('#password').val() ==''){
        $('.message-error').html( 'Please enter your password');
        $('.message-error').show('slow');
        $('#password').focus();
        return false;
    }
    let data = {
        email: $("#email").val(),
        password: $("#password").val(),
    }
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'post',
        url: '/customerLogin',
        cache: false,
        data: data,
        success: function (result) {
            console.log("Request sent")
            console.log(result['message']);
            if (result['status']) {
                console.log(result['customer']);
                localStorage.setItem('tokenCustomer',result['token']);
                window.location.assign('/home');
            }else {
                $('.message-error').html( 'Email or Password isn\'t correct');
                $('.message-error').show('slow');
                $('#email').focus();
            }
        },
        error: function(data){
            alert("Error send request");
        }
    });
    return false;
});