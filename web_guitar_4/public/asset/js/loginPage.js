
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
        type: 'post',
        url: 'controller/AccountController.php',
        dataType: 'text',
        data: {
            username: $("#username").val(),
            password: $("#password").val(),
            action: "login"
        },
        success: function (data) {
            if (data =='1') {
                alert('Đăng nhập thành công');
                window.location.replace('index.php');
            }else {
                alert('Đăng nhập thất bại');
            }
        },
        error: function(data){
            alert("Không thể load dữ liệu");
        }
    });
    return false;
});