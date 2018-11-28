<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="vendor/fonts/quicksand-opensan.css" rel="stylesheet">
    <script src="vendor/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="vendor/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" href="vendor/css/bootstrap.min.css"/>

    <link rel="stylesheet" href="assets/css/header.css"/>
    <link rel="stylesheet" href="assets/css/footer.css"/>
    <link rel="stylesheet" href="assets/css/navigationPath.css"/>
    <link rel="stylesheet" href="assets/css/loginPage.css"/>


</head>
<body>
<!--header-->
<?php
require_once('views/header.php');
?>
<!-- end header -->
<div class="container-fluid" style="font-family: Quicksand;margin-top:-20px">

                <div class="row">
                    <form id="login-form" onsubmit="return validateInput()">
                        <div class="form-group">
                            <input type="text" class="form-control" id="username" placeholder="Enter user"
                                   name="username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" placeholder="Enter password"
                                   name="password">
                        </div>
                        <div class="form-group">
                            <input class="check-box" type="checkbox" name="remember"> Remember me
                            <span class="forget-pass"><a href="#">Forgot Password ?</a></span>
                        </div>
                        <p id="message" style="color:red;display: none"></p>
                        <button type="submit" class="btn btn-default btn-submit">Sign In
                        </button>
                        <button type="button" class="btn btn-default btn-create-new-account"><a href="signUp.php">Create
                                New Account</a></button>
                        <div class="alert alert-warning" style="display: none" id="error-message">
                            <strong>Warning!</strong> Indicates a warning that might need attention.
                        </div>
                        <input type="text" value="0" class="wrong-sign-in" hidden>
                    </form>
                </div>
</div>
</body>
<script src="assets/js/responsivePage.js"></script>
<?php

?>
<script>
    // $(document).ready(function() {
    // function validateInput() {
    //     console.log($("#login-form"));
    //     if ($("#username").val() == '') {
    //         $('#error-message').html('Please enter your username');
    //         $('#error-message').css("display", "block");
    //         return false;
    //     } else if ($('#password').val() == '') {
    //         $('#error-message').html('Please enter your password');
    //         $('#error-message').css("display", "block");
    //         return false;
    //     }
    //     $('#error-message').css("display", "block");
    //     console.log($(this));
    //     //$("#login-form").submit();
    //     return false;
    // }
    // }
    //

</script>
</html>
