
// $(document).ready(function () {
//     $('.wrong-sign-in').on("change",function(){
//         $("#error-message").html("<?= $message?>")
//         $("#error-message").css("display","block");
//
//     });
//
// });
$('#login-form').submit(function() {

    if($("#username").val()==''){
        $('#error-message').html( 'Please enter your name');
        $('#error-message').css("display","block");
        return false;
    }else if($('#password').val() ==''){
        $('#error-message').html( 'Please enter your password');
        $('#error-message').css("display","block");
        return false;
    }
    $.ajax({
        type: 'POST',
        url: 'AccountController.php',
        data: {
            username: $("#username").val(),
            password: $("#password").val(),
            action: "login"
        },
        success: function (data) {
            if (data === 'Login') {
                window.location.replace('index.php');
                alert('Dang nhap thanh cong');
            }
            else {
                alert("-----"+data+"-----");
            }
        },
        error: function(data){
            alert("Loi ch trinh" );
        }
    });
    return false;
});