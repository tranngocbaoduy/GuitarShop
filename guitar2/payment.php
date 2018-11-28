<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="vendor/fonts/quicksand-opensan.css" rel="stylesheet">
    <script src="vendor/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="vendor/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" href="vendor/css/bootstrap.min.css"/>

    <link rel="stylesheet" href="assets/css/header.css"/>
    <link rel="stylesheet" href="assets/css/footer.css"/>
    <link rel="stylesheet" href="assets/css/navigationPath.css"/>
    <link rel="stylesheet" href="assets/css/paymentPage.css"/>

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
                <h1 class="title-page"><b>YOUR PAYMENT</b></h1>

            </div>
            <div class="col-lg-3 col-md-2 col-sm-1 col-xs-1"></div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="row" style="padding:0px;margin:0px">
                    <h5><span class="badge">!</span><b> Personal Information</b></h5>
                    <form class="info-user" onsubmit="return validateInput()" method="GET">
                        <div class="form-group name-info-user">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="f-name" placeholder="Enter frist name"
                                           name="f-name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="l-name" placeholder="Enter last name"
                                           name="l-name">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="address" placeholder="Enter address"
                                   name="address">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" id="phone" placeholder="Enter phone" name="phone">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="city" placeholder="Enter city" name="city">
                        </div>
                        <div class="form-group name-info-user">
                            <div class="row">
                                <div class="col-lg-6">
                                    <select class="form-control" id="country">
                                        <option>Your Country</option>
                                        <option>VN</option>
                                        <option>Phap</option>
                                        <option>Japaneses</option>
                                        <option>Korea</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="code" placeholder="Enter Postal Code"
                                           name="code">
                                </div>
                            </div>
                        </div>
                        <p id="error-message"><?= $checked ?></p>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 login-input">
                <div class="row">
                    <h5><span class="badge">!</span><b> Payment Method</b></h5>
                    <form name="my-login" onsubmit="return validateInput()" method="GET">
                        <div class="form-group image-bank">
                            <img src="assets/images/common/bank.png" width="50px">
                            <img src="assets/images/common/visa.png" width="50px">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="card-name" placeholder="Enter card name"
                                   name="card-name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="card-number" placeholder="Enter card number"
                                   name="card-number">
                        </div>
                        <div class="form-group">
                            <div class="form-inline info-card-bank">
                                <p>DATE</p>
                                <input type="number" class="form-control" placeholder="CVV Code" id="num-1"
                                       name="nume-1">
                                <input type="date" class="form-control" id="num-1" name="nume-1">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <div class="form-inline">
                                <strong>Total: $456</strong>
                                <input class="form-control" type="text" style="visibility: hidden">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-default btn-submit form-control">Payment</button>
                        </div>
                        <p id="message" style="color:red;display: none"></p>
                        <div class="alert alert-warning" style="display: none" id="error-message">
                            <strong>Warning!</strong> Indicates a warning that might need attention.
                        </div>
                        <p id="error-message"><?= $checked ?></p>
                    </form>
                </div>
            </div>
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
<script src="assets/js/responsivePage.js"></script>
<script src="assets/js/validateInput.js"></script>
</html>	
