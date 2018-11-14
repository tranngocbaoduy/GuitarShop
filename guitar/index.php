
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Home Guitar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="vendor/fonts/quicksand-opensan.css" rel="stylesheet">
    <script src="vendor/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="vendor/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" href="vendor/css/bootstrap.min.css" />

    <link rel="stylesheet" href="assets/css/header.css" />
    <link rel="stylesheet" href="assets/css/carousel.css" />
    <link rel="stylesheet" href="assets/css/indexPage.css" />
    <link rel="stylesheet" href="assets/css/productPage.css" />

    <link rel="stylesheet" href="assets/css/footer.css" />

</head>
<body>
<!--header-->
<?php
    require_once ('views/header.php');
?>
<!-- end header -->

<!-- carousel -->
<?php
    require_once ('views/carousel.php');
?>
<!-- end carousel -->

<div class="container-fluid section" style="font-family: Quicksand">
    <div class="container" >

        <!-- section 2 -->
        <div class="row is-flex product-first"  style="box-sizing: border-box">
            <div class="col-lg-4 col-md-2 col-sm-2 col-xs-1">
                <img src="assets/images/common/line.png" alt="" class="line-decoration">
            </div>
            <div class="col-lg-4 col-md-8 col-sm-8 col-xs-10">
                <h1 class="unit"><b>NEW PRODUCT</b></h1>
            </div>
            <div class="col-lg-4 col-md-2 col-sm-2 col-xs-1">
                <img src="assets/images/common/line.png" alt="" class="line-decoration">
            </div>
        </div>
        <div class="row is-flex list-product" id="new-product">

        </div>
        <div class="row is-flex" style="margin-top: 20px;text-align: center" >
            <div class="col-lg-4 col-sm-3 col-xs-3"></div>
            <div class="col-lg-4 col-sm-6 col-xs-6">
                <button type="button" class="btn btn-default btn-more" id="btn-more-1">MORE</button>
            </div>
            <div class="col-lg-4 col-sm-3 col-xs-3"></div>
        </div>
        <div class="clearfix"></div>
        <!-- end section 2 -->

        <!-- section 3 -->
        <div class="row is-flex">
            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-1">
                <img src="assets/images/common/line.png" alt="" class="line-decoration">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-10">
                <h1 class="unit"><b>BEST SELLER</b></h1>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-1">
                <img src="assets/images/common/line.png" alt="" class="line-decoration">
            </div>
        </div>
        <div class="row is-flex list-product">
        </div>
        <div class="clearfix"></div>

        <!-- end section 4 -->

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
<script src="assets/js/responsivePage.js"></script>
<script src="assets/js/indexPage.js"></script>

</html>	
