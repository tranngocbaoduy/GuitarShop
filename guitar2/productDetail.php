<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Detail</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="vendor/fonts/quicksand-opensan.css" rel="stylesheet">
    <script src="vendor/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="vendor/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" href="vendor/css/bootstrap.min.css"/>

    <link rel="stylesheet" href="assets/css/header.css"/>
    <link rel="stylesheet" href="assets/css/footer.css"/>
    <link rel="stylesheet" href="assets/css/navigationPath.css"/>
    <link rel="stylesheet" href="assets/css/navigationPathCategory.css"/>
    <link rel="stylesheet" href="assets/css/productDetailPage.css"/>

</head>
<body>
<!--header-->

<script src="assets/js/productDetailPage.js"></script>
<?php
require_once('views/header.php');
?>
<!-- end header -->
<div class="container-fluid" style="font-family: Quicksand;margin-top:-20px">
    <?php
    require_once('views/navigationPath.php');
    ?>
    <div class="container">
        <div class="row ">
            <!--  navigation left-->
            <?php
            require_once('views/navigationLeft.php');
            ?>
            <!-- Detail Product right-->
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="row is-flex">
                    <div class="col-lg-3 col-md-2 col-sm-1 col-xs-1">
                        <img src="assets/images/common/line.png" class="line-decoration" alt="">
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12" id="cate-product">
<!--                        Category of product will be here-->
                    </div>
                    <div class="col-lg-3 col-md-2 col-sm-1 col-xs-1">
                        <img src="assets/images/common/line.png" class="line-decoration" alt="">
                    </div>
                </div>
                <div class="row" id="info-product">
<!--                    information common of product will be here-->

                </div>
                <!-- end product detail -->
                <div class="row fd-product-tabs information-product-content">
                    <ul class="nav nav-tabs ">
                        <li class="active"><a data-toggle="tab" href="#ptap-detail">Product Detail</a></li>
                        <li><a data-toggle="tab" href="#ptap-feedback">Feedback(0)</a></li>
                        <li><a data-toggle="tab" href="#ptap-video">Video</a></li>
                    </ul>
                    <div class="tab-content" id="detail-product">
                        <div id="ptap-detail" class="tab-pane fade in active">
                            <li>Brand Name: <b>Cordoba</b></li>
                            <li>Type: <b>Acoustic Guitar</b></li>
                            <li>Suitable For: <b>Beginner, Unisex, Professional Performance, Home-schooling</b></li>
                            <li>Model Number: <b>AGT16</b></li>
                            <li>Pickup: none</li>
                            <li>Tone Position: <b>18</b></li>
                        </div>
                        <div id="ptap-feedback" class="tab-pane fade">
                            <p>Feeldback here</p>
                        </div>
                        <div id="ptap-video" class="tab-pane fade">
                            <p>Video here</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row is-flex">
            <div class="col-lg-3 col-md-2 col-sm-1 col-xs-1">
                <img src="assets/images/common/line.png" class="line-decoration" alt="">
            </div>
            <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
                <h1 class="title-product"><b>AUCOSTIC GUITAR</b></h1>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-1 col-xs-1">
                <img src="assets/images/common/line.png" class="line-decoration" alt="">
            </div>
        </div>
        <!-- product -->
        <div class="row is-flex">
            <?php
            for ($i = 0; $i < 4; $i++) {
                ?>

                <div class="col-lg-3 col-md-3 col-sm-6 product">
                    <a href="#" class="btn btn-block" style="display:block;width: 100%;overflow: hidden">

                    <img src="assets/images/product/product-2.png" alt="Avatar" style="width:100%">
                    <h4><b>Cordoba C1 3/4<br>$132.99</b></h4>
                    </a>
                </div>
                <?php
            }
            ?>
        </div>
        <!-- button -->
        <div class="row is-flex" style="margin-top: 20px;text-align: center">
            <div class="col-lg-4 col-sm-3 col-xs-3"></div>
            <div class="col-lg-4 col-sm-6 col-xs-6">
                <button type="button" class="btn btn-default"
                        style="color:black;border-radius: 0px;margin-top: 20px;width: 100%">MORE
                </button>
            </div>
            <div class="col-lg-4 col-sm-3 col-xs-3"></div>
        </div>
        <div class="clearfix"></div>
        <!--            end button-->
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
<script src="assets/js/increaseDecreaseQuantity.js"></script>
</html>	
