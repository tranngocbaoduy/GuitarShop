// $(document).ready(function () {
//     $('.wrong-sign-in').on("change",function(){
//         $("#error-message").html("<?= $message?>")
//         $("#error-message").css("display","block");
//
//     });
//
// });


$("#cb-accept").change(function () {
    $('.message-error').hide('slow');

});


$('.btn-submit').click(function () {

    if ($("#email").val() == '') {
        $('.message-error').html('Please enter your name');
        $('.message-error').show('slow');
        $('#email').focus();
        return false;
    }
    if ($('#password').val() == '') {
        $('.message-error').html('Please enter your password');
        $('.message-error').show('slow');
        $('#password').focus();
        return false;
    }
    if ($('#re-password').val() == '') {
        $('.message-error').html('Please enter your re-password');
        $('.message-error').show('slow');
        $('#re-password').focus();
        return false;
    }
    if (!$('#cb-accept').is(':checked')) {
        $('.message-error').html('Please accept our Term & Condition');
        $('.message-error').show('slow');
        $('#cb-accept').focus();
        return false;
    }


    let data = {
        email: $("#email").val(),
        password: $("#password").val(),
        rePass: $("#re-password").val(),
        receiveMail: true,
    }
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'post',
        url: '/customerSignUp',
        cache: false,
        data: data,
        success: function (result) {
            console.log("Request sent")
            console.log(result['message']);
            if (result['status']) {
                console.log(result['customer']);
                window.location.assign('/userLogin');
            } else {
                $('.message-error').html(result['message']);
                $('.message-error').show('slow');
            }

        },
        error: function (data) {
            alert("Error send request");
        }
    });

});

$("#email").keyup(function () {
    $('.message-error').hide('slow');
});
$("#password").keyup(function () {
    $('.message-error').hide('slow');
});
$("#re-password").keyup(function () {
    if ($('#re-password').val() != $('#password').val()) {
        $('.message-error').html('Password isn\'t match');
        $('.message-error').show('slow');
        $('#re-password').focus();

    } else {
        $('.message-error').hide('slow');
    }
});