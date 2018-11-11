<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="vendor/fonts/quicksand-opensan.css" rel="stylesheet">
    <script src="vendor/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="vendor/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" href="vendor/css/bootstrap.min.css" />

    <link rel="stylesheet" href="assets/css/header.css" />
    <link rel="stylesheet" href="assets/css/indexPage.css" />
    <link rel="stylesheet" href="assets/css/productPage.css" />
    <link rel="stylesheet" href="assets/css/navigationPath.css" />
    <link rel="stylesheet" href="assets/css/navigationPathCategory.css" />
    <link rel="stylesheet" href="assets/css/footer.css" />
</head>
<body>
<!-- header -->
<?php
    require_once ('views/header.php');
?>
<!-- end header -->

<!-- section 2 -->
<div class="container-fluid" style="font-family: Quicksand;margin-top:-20px">
    <?php
        require_once ('views/navigationPath.php');
    ?>
    <div class="container">
        <div class="row ">
            <?php
                require_once ('views/navigationLeft.php');
            ?>
            <!-- product right -->
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="row is-flex">
                    <div class="col-lg-3 col-md-2 col-sm-1 col-xs-1">
                        <img src="assets/images/common/line.png" class="line-decoration" alt="">
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
                        <h1 class="unit"><b>AUCOSTIC GUITAR</b></h1>
                    </div>
                    <div class="col-lg-3 col-md-2 col-sm-1 col-xs-1">
                        <img src="assets/images/common/line.png" class="line-decoration" alt="">
                    </div>
                </div>
                <!-- product -->
                <div class="row is-flex">
                    <?php
                    for($i = 0;$i<9;$i++){
                        ?>
                            <div class="col-lg-4 col-md-6 col-sm-6 product">
                                <img src="assets/images/product/product-2.png" alt="Avatar" style="width:100%">
                                <h4><b>Cordoba C1 3/4<br>$132.99</b></h4>
                            </div>
                        <?php
                    }
                    ?>
                </div>
                <!-- end product 3 -->

                <!-- button -->
                <div class="row is-flex" style="margin-top: 20px;text-align: center">
                    <div class="col-lg-4 col-sm-3 col-xs-3"></div>
                    <div class="col-lg-4 col-sm-6 col-xs-6">
                        <button type="button" class="btn btn-default" style="color:black;border-radius: 0px;margin-top: 20px;width: 100%">MORE</button>
                    </div>
                    <div class="col-lg-4 col-sm-3 col-xs-3"></div>
                </div>
                <div class="clearfix"></div>

                <!-- end button -->
            </div>
        </div>
    </div>
    <!-- end section 2 -->

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
<script src="assets/js/responsivePage.js"></script>
</html>
