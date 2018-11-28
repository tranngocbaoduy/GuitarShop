
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="vendor/fonts/quicksand-opensan.css" rel="stylesheet">
    <script src="vendor/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="vendor/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" href="vendor/css/bootstrap.min.css" />

    <link rel="stylesheet" href="assets/css/header.css" />
    <link rel="stylesheet" href="assets/css/footer.css" />
    <link rel="stylesheet" href="assets/css/navigationPath.css" />
    <link rel="stylesheet" href="assets/css/videoPage.css" />

</head>
<body>
    <!--header-->
    <?php
        require_once('views/header.php');
    ?>
    <!-- end header -->
    <div class="container-fluid" >
        <?php
        require_once('views/navigationPath.php');
        ?>
        <div class="container">
            <div class="row is-flex">
                <div class="col-lg-3 col-md-2 col-sm-1 col-xs-1"></div>
                <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
                    <h1 class="title-page"><b>ALL VIDEO FOR YOU</b></h1>
                </div>
                <div class="col-lg-3 col-md-2 col-sm-1 col-xs-1"></div>
            </div>
            <div class="row">
                <div class="col-lg-9 col-lg-8 col-sm-8 col-xs-12">
                    <iframe width="100%" height="500" src="https://www.youtube.com/embed/P_xFh7XFC_w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-lg-5 col-lg-4 col-sm-4 col-xs-12">
                    <img width="100%" src="assets/images/common/logo.png" style="width:50%">
                </div>
            </div>
        </div>

        <!-- product -->
        <div class="container">
            <div class="row is-flex">
                <div class="col-lg-3 col-md-2 col-sm-1 col-xs-1">
                    <img src="assets/images/common/line.png" class="line-decoration" alt="">
                </div>
                <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
                    <h1 class="title-page"><b>AUCOSTIC GUITAR</b></h1>
                </div>
                <div class="col-lg-3 col-md-2 col-sm-1 col-xs-1">
                    <img src="assets/images/common/line.png" class="line-decoration" alt="">
                </div>
            </div>
        <div class="row is-flex">
            <?php
            for($i = 0;$i<4;$i++){
                ?>
                <div class="col-lg-3 col-md-3 col-sm-6 div-video">
                    <iframe width="100%" height="200" src="https://www.youtube.com/embed/P_xFh7XFC_w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <?php
            }
            ?>
        </div>
        <!-- button -->
        <div class="row is-flex" style="margin-top: 20px;text-align: center">
            <div class="col-lg-4 col-sm-3 col-xs-3"></div>
            <div class="col-lg-4 col-sm-6 col-xs-6">
                <button type="button" class="btn btn-default" style="color:black;border-radius: 0px;margin-top: 20px;width: 100%">MORE</button>
            </div>
            <div class="col-lg-4 col-sm-3 col-xs-3"></div>
        </div>
        </div>
        <div class="clearfix"></div>
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
<script src="assets/js/yourCartPage.js"></script>
<script src="assets/js/increaseDecreaseQuantity.js"></script>
</html>	
