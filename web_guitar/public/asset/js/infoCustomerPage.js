$(document).ready(function () {
    if (checkHasLoginYet()) {
        fillInfoCustomer();
    }
});

function checkHasLoginYet() {
    let checkLogin = localStorage.getItem('tokenCustomer');
    if (checkLogin != null) {
        return true;
    } else {
        window.location.assign('/userLogin');
        alert('You must login first!!!');
    }
}

function fillInfoCustomer() {
    let tokenCustomer = localStorage.getItem('tokenCustomer');

    let data = {
        token: tokenCustomer,
    }
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'post',
        url: '/getInfoUserPayment',
        cache: false,
        data: data,
        success: function (result) {
            console.log("Request sent")
            console.log(result['message']);
            if (result['status']) {
                console.log(result['customer']);

                let htmlInfo = '';
                let htmlShipping = '';
                let name = result['customer']['name'];
                let address = result['customer']['address'];
                let city = result['customer']['city'];
                let phone = result['customer']['phone'];
                let email = result['customer']['email'];
                let country = result['customer']['country'];
                let check = false;

                if (name == null) {
                    name = '';
                    check = true;
                }
                if (city == null) {
                    name = '';
                    check = true;
                }
                if (address == null) {
                    address = '';
                    check = true;
                }
                if (phone == null) {
                    phone = '';
                    check = true;
                }

                htmlInfo += '<li>Name: ' + name + '</li>\n' +
                    '<li>Address: ' + address + '</li>\n' +
                    '<li>Email: ' + email + '</li>\n' +
                    '<li>Phone: ' + phone + '</li>\n' +
                    '<li class="error-message" style="margin-top:10px;display: none"></li>\n';
                $('#account-info').append(htmlInfo);

                htmlShipping += '<li>Default Shipping Address: ' + address + '</li>\n' +
                    '<li>Email: ' + email + '</li>\n' +
                    '<li>Phone: ' + phone + '</li>\n' +
                    '<li class="error-message-shipping" style="margin-top:10px;display: none"></li>\n';

                $('#account-shipping').append(htmlShipping);
                if(check){
                    $('.error-message').addClass('alert');
                    $('.error-message').addClass('alert-warning');
                    $('.error-message').html('You should fill information full to use all our service');
                    $('.error-message').show('slow');
                }

            } else {

            }

        },
        error: function (data) {
            alert("Error send request");
        }
    });

}

// $("#cb-accept").change(function () {
//     $('.message-error').hide('slow');
//
// });
//
//
// $('.btn-submit').click(function () {
//
//     if ($("#email").val() == '') {
//         $('.message-error').html('Please enter your name');
//         $('.message-error').show('slow');
//         $('#email').focus();
//         return false;
//     }
//     if ($('#password').val() == '') {
//         $('.message-error').html('Please enter your password');
//         $('.message-error').show('slow');
//         $('#password').focus();
//         return false;
//     }
//     if ($('#re-password').val() == '') {
//         $('.message-error').html('Please enter your re-password');
//         $('.message-error').show('slow');
//         $('#re-password').focus();
//         return false;
//     }
//     if (!$('#cb-accept').is(':checked')) {
//         $('.message-error').html('Please accept our Term & Condition');
//         $('.message-error').show('slow');
//         $('#cb-accept').focus();
//         return false;
//     }
//
//
//     let data = {
//         email: $("#email").val(),
//         password: $("#password").val(),
//         rePass: $("#re-password").val(),
//         receiveMail: true,
//     }
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });
//     $.ajax({
//         type: 'post',
//         url: '/customerSignUp',
//         cache: false,
//         data: data,
//         success: function (result) {
//             console.log("Request sent")
//             console.log(result['message']);
//             if (result['status']) {
//                 console.log(result['customer']);
//                 window.location.assign('/userLogin');
//             } else {
//                 $('.message-error').html(result['message']);
//                 $('.message-error').show('slow');
//             }
//
//         },
//         error: function (data) {
//             alert("Error send request");
//         }
//     });
//
// });
//
// $("#email").keyup(function () {
//     $('.message-error').hide('slow');
// });
// $("#password").keyup(function () {
//     $('.message-error').hide('slow');
// });
// $("#re-password").keyup(function () {
//     if ($('#re-password').val() != $('#password').val()) {
//         $('.message-error').html('Password isn\'t match');
//         $('.message-error').show('slow');
//         $('#re-password').focus();
//
//     } else {
//         $('.message-error').hide('slow');
//     }
// });