$(document).ready(function () {

    $('.btn-send-email').click(function () {
        if (checkValid()) {
            let data = {
                email: $('#email').val(),
                phone: $('#phone').val(),
                message: $('#message').val(),
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'post',
                url: '/addFeedback',
                cache: false,
                data: data,
                success: function (result) {
                    console.log("Request sent")
                    $('.message-error').html('');
                    if (result['status']) {
                        console.log(result['message']);
                        $('.message-error').html(result['message']);
                        $('.message-error').show('slow');
                        $('#email').focus();
                    }else {
                        $('.message-error').html(result['message']);
                        $('.message-error').show('slow');
                        $('#email').focus();
                    }
                },
                error: function(data){
                    alert("Error send request");
                }
            });
        }
    });
});

$("#email").keyup(function () {
    $('.message-error').hide('slow');
});
$("#phone").keyup(function () {
    $('.message-error').hide('slow');
});
$("#message").keyup(function () {
    $('.message-error').hide('slow');
});


function checkValid() {
    if (!validateEmail($('#email').val() )) {
        $('.message-error').html('Invalid Email. Format Email : abc@gmail.com');
        $('.message-error').show('slow');
        $('#email').focus();
        return false;
    } else if ($('#phone').val() == '') {
        $('.message-error').html('Please enter your phone');
        $('.message-error').show('slow');
        $('#phone').focus();
        return false;
    } else if ($('#message').val() == '') {
        $('.message-error').html('Please enter your message');
        $('.message-error').show('slow');
        $('#message').focus();
        return false;
    }
    return true;
}