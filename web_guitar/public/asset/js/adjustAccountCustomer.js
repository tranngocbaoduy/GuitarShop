$(document).ready(function () {
    getInfoUser();
    $('.btn-update-info').click(function () {

        if (validateInput()) {
            updateCustomer();
        }
    })

});

function updateCustomer() {
    let data = {
        name: $("#name").val(),
        address: $("#address").val(),
        phone: $("#phone").val(),
        email: $("#email").val(),
        country: $("#country").val(),
        city: $("#city").val(),
    }
    console.log(data);

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: "post",
        url: "/updateCustomer",
        data: data,
        cache: false,
        success: function (result) {
            console.log('Request send');
            console.log('Message: ' + result['message']);
            if(result['status']){
                // window.location.assign('/ajustAccount');
                $('.message-error').show('slow');
                $('.message-error').html("Update Success");
                $('.message-error').css('color','black');
            }
        },
        error: function () {
            console.log('Request failed');
        },
    });

}

$("#f-name").keyup(function () {
    $('.message-error').hide('slow');
});
$("#l-name").keyup(function () {
    $('.message-error').hide('slow');
});
$("#address").keyup(function () {
    $('.message-error').hide('slow');
});
$("#city").keyup(function () {
    $('.message-error').hide('slow');
});
$("#phone").keyup(function () {
    $('.message-error').hide('slow');
});
$("#country").change(function () {
    $('.message-error').hide('slow');
});

function validateInput() {
    if ($("#name").val() == "") {
        $('.message-error').show('slow');
        $('.message-error').html("Invalid Last Name. Please check again !!");
        $('#l-name').focus();
        return false;
    } else if ($("#address").val() == "") {
        $('.message-error').show('slow');
        $('.message-error').html("Invalid Address. Please check again !!");
        $('#address').focus();
        return false;
    } else if ($("#email").val() == "") {
        $('.message-error').show('slow');
        $('.message-error').html("Invalid Email. Please check again !!");
        $('#email').focus();
        return false;
    } else if ($("#phone").val() == "") {
        $('.message-error').show('slow');
        $('.message-error').html("Invalid Phone. Please check again !!");
        $('#phone').focus();
        return false;
    } else if ($("#city").val() == "") {
        $('.message-error').show('slow');
        $('.message-error').html("Invalid City. Please check again !!");
        $('#city').focus();
        return false;
    }
    return true;
}

function getInfoUser() {
    let token = localStorage.getItem('tokenCustomer');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    let data = {
        token: token,
    }

    $.ajax({
        type: "post",
        url: "/getInfoUserPayment",
        data: data,
        cache: false,
        success: function (data) {
            console.log('Request sent !');
            console.log('Message: ' + data['message']);


            if (data['status']) {

                let name = data['customer']['name'];
                let address = data['customer']['address'];
                let city = data['customer']['city'];
                let phone = data['customer']['phone'];
                let email = data['customer']['email'];
                let country = data['customer']['country'];


                $("#name").val(name);
                $("#address").val(address);
                $("#city").val(city);
                $("#phone").val(phone);
                $("#email").val(email);
                $("#country").val();
            }
        },
        error: function () {
            alert('Request get info customer failed');
        }
    });
}