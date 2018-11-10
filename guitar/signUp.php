
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="boostrap/fonts/quicksand-opensan.css" rel="stylesheet">
    <script src="boostrap/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="boostrap/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" href="boostrap/css/bootstrap.min.css" />

    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/navigationPath.css" />
    <link rel="stylesheet" href="css/loginPage.css" />
    <link rel="stylesheet" href="css/signUpPage.css" />
</head>
<body>
<!--header-->
<?php
require_once ('views/header.php');
?>
<!-- end header -->
<div class="container-fluid" style="font-family: Quicksand;margin-top:-20px">
    <?php
    require_once ('views/navigationPath.php');
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
                    <form name="my-login" action="login.php" onsubmit="return validateInput()">
                        <div class="form-group">
    <!--                        <label for="Name">Name:</label>-->
                            <input  type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group">
    <!--                        <label for="pwd">Password:</label>-->
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                        </div>
                        <div class="form-group">
                            <!--                        <label for="pwd">Re Password:</label>-->
                            <input type="password" class="form-control" id="re-pwd" placeholder="Enter Re-password" name="re-pwd">
                        </div>
                        <div class="form-group">
                            <!--                        <label for="pwd">Password:</label>-->
                            <input class="check-box-accept" type="checkbox" name="remember" > I accept the Terms and Condition
                        </div>
                        <div class="form-group">
                            <!--                        <label for="pwd">Password:</label>-->
                            <input class="check-box-receive-email" type="checkbox" name="remember" > I agree to receive email & phone communications
                        </div>
                        <p id="message" style="color:red;display: none"></p>
                        <button type="submit" class="btn btn-default btn-submit">Register</button>
                        <div class="alert alert-warning" style="display: none" id="error-message">
                            <strong>Warning!</strong> Indicates a warning that might need attention.
                        </div>
                    </form>
                </div>
                <div class="row btn-login-with-social-media">
                    <h4 class="h4-title-login-with-social-media">Login via social media</h4>
                    <div class="col-lg-6">
                        <button type="button" class="btn btn-default btn-google">Google</button>
                    </div>
                    <div class="col-lg-6">
                        <button type="button" class="btn btn-default btn-facebook">Facebook</button>
                    </div>

                </div>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
</div>

<!-- footer -->
<div class="row is-flex notsection">
    <?php
    require_once ('views/footer.php');
    ?>
</div>
<p class="store-year">© 2018 GUITAR FOR YOU - ALL RIGHTS RESERVED</p>
<!-- end footer -->
</div>
</body>
<script src="js/responsivePage.js"></script>
<script src="js/validateInput.js"></script>
</html>	
