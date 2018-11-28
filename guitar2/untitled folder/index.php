
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
    <link rel="stylesheet" href="css/carousel.css" />
    <link rel="stylesheet" href="css/indexPage.css" />
    <link rel="stylesheet" href="css/productPage.css" />

    <link rel="stylesheet" href="css/footer.css" />

</head>
<body>
<!--header-->
<?php
    require_once('views/header.php');
?>
<!-- end header -->

<!-- carousel -->
<?php
    require_once('views/carousel.php');
?>
<!-- end carousel -->

<div class="container-fluid section" style="font-family: Quicksand">
    <div class="container" >

        <!-- section 2 -->
        <div class="row is-flex product-first">
            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-1">
                <img src="images/common/line.png" alt="" class="line-decoration">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-10">
                <h1 class="unit"><b>NEW PRODUCT</b></h1>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-1">
                <img src="images/common/line.png" alt="" class="line-decoration">
            </div>
        </div>
        <div class="row is-flex list-product">
            <?php
            for($i = 0;$i<4;$i++){
                ?>
                <div class="col-lg-3 col-md-6 col-sm-6 product">
                    <img src="images/product/product-2.png" alt="Avatar" style="width:100%">
                    <h4><b>Cordoba C1 3/4<br>$132.99</b></h4>
                </div>
                <?php
            }
            ?>
        </div>
        <div class="row is-flex" style="margin-top: 20px;text-align: center">
            <div class="col-lg-4 col-sm-3 col-xs-3"></div>
            <div class="col-lg-4 col-sm-6 col-xs-6">
                <button type="button" class="btn btn-default btn-more">MORE</button>
            </div>
            <div class="col-lg-4 col-sm-3 col-xs-3"></div>
        </div>
        <div class="clearfix"></div>
        <!-- end section 2 -->

        <!-- section 3 -->
        <div class="row is-flex">
            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-1">
                <img src="images/common/line.png" alt="" class="line-decoration">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-10">
                <h1 class="unit"><b>BEST SELLER</b></h1>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-1">
                <img src="images/common/line.png" alt="" class="line-decoration">
            </div>
        </div>
        <div class="row is-flex list-product">
            <?php
            for($i = 0;$i<4;$i++){
                ?>
                <div class="col-lg-3 col-md-6 col-sm-6 product">
                    <img src="images/product/product-3.png" alt="Avatar" style="width:100%">
                    <h4><b>Cordoba C1 3/4<br>$132.99</b></h4>
                </div>
                <?php
            }
            ?>
        </div>
        <div class="row is-flex" style="margin-top: 20px;text-align: center">
            <div class="col-lg-4 col-sm-3 col-xs-3"></div>
            <div class="col-lg-4 col-sm-6 col-xs-6">
                <button type="button" class="btn btn-default btn-more">MORE</button>
            </div>
            <div class="col-lg-4 col-sm-3 col-xs-3"></div>
        </div>
        <div class="clearfix"></div>

        <!-- end section 3 -->

        <!-- section 4 -->
<!--        <div class="row is-flex">-->
<!--            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-1">-->
<!--                <img src="images/common/line.png"  alt="" class="line-decoration">-->
<!--            </div>-->
<!--            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-10">-->
<!--                <h1 class="unit"><b>SELL OFF</b></h1>-->
<!--            </div>-->
<!--            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-1">-->
<!--                <img src="images/common/line.png"  alt="" class="line-decoration">-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="row is-flex list-product">-->
<!--            --><?php
//            for($i = 0;$i<4;$i++){
//                ?>
<!--                <div class="col-lg-3 col-md-6 col-sm-6 product">-->
<!--                    <img src="images/product/product-1.png" alt="Avatar" style="width:100%">-->
<!--                    <h4><b>Cordoba C1 3/4<br>$132.99</b></h4>-->
<!--                </div>-->
<!--                --><?php
//            }
//            ?>
<!--        </div>-->
<!--        <div class="row is-flex" >-->
<!--            <div class="col-lg-4 col-sm-3 col-xs-3"></div>-->
<!--            <div class="col-lg-4 col-sm-6 col-xs-6">-->
<!--                <button type="button" class="btn btn-default btn-more" >MORE</button>-->
<!--            </div>-->
<!--            <div class="col-lg-4 col-sm-3 col-xs-3"></div>-->
<!--        </div>-->
        <div class="clearfix"></div>

        <!-- end section 4 -->

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
<script src="js/responsivePage.js"></script>
</html>	
