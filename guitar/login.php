<?php
session_start();
if (isset($_SESSION['usernameCurrent']) && isset($_SESSION['passwordCurrent'])) {
    header("Location: index.php");
}

?>
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

    <script src="./assets/js/responsivePage.js"></script>
    <script src="./assets/js/validateInput.js"></script>


</head>
<body>
<!--header-->
<?php
require_once('views/header.php');
?>
<!-- end header -->
<div class="container-fluid" style="font-family: Quicksand;margin-top:-20px">
    <?php
    require_once('views/navigationPath.php');
    ?>
    <div class="container">
        <div class="row is-flex">
            <div class="col-lg-3 col-md-2 col-sm-1 col-xs-1"></div>
            <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
                <h1 class="title-page"><b>ONE LOGIN TO ALL SERVICE</b></h1>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-1 col-xs-1"></div>
        </div>
        <div class="row form-login-input">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 login-input">
                <div class="row">
                    <form id="login-form" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" id="username" placeholder="Enter user"
                                   name="username" value="">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" placeholder="Enter password"
                                   name="password" value="">
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
                <div class="row btn-login-with-social-media">
                    <h4 class="h4-title-login-with-social-media">Login via social media</h4>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <button type="button" class="btn btn-default btn-google">Google</button>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <button type="button" class="btn btn-default btn-facebook">Facebook</button>
                    </div>

                </div>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>


    <!-- footer -->
    <div class="row is-flex notsection">
        <?php
        require_once('views/footer.php');
        ?>
    </div>
    <p class="store-year">© 2018 GUITAR FOR YOU - ALL RIGHTS RESERVED</p>
    <!-- end footer -->
</div>
</body>
<script src="./assets/js/loginPage.js"></script>
</html>	
