
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
    <link rel="stylesheet" href="css/navigationPathCategory.css" />
    <link rel="stylesheet" href="css/productDetailPage.css" />

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
            <div class="row ">
                <!--  navigation left-->
                <?php
                require_once ('views/navigationLeft.php');
                ?>
                <!-- Detail Product right-->
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="row is-flex">
                        <div class="col-lg-3 col-md-2 col-sm-1 col-xs-1">
                            <img src="images/common/line.png" class="line-decoration" alt="">
                        </div>
                        <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
                            <h1 class="title-product"><b>AUCOSTIC GUITAR</b></h1>
                        </div>
                        <div class="col-lg-3 col-md-2 col-sm-1 col-xs-1">
                            <img src="images/common/line.png" class="line-decoration" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 product">
                            <img src="images/product/product-1.png" alt="Avatar" style="width:100%">
                        </div>

                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                            <ul class="detail">
                                <li><h1><b>Cordoba C1 3/4</b></h1></li>
                                <li>Price : 456$</li>
                                <li>Brand : Cordoba</li>
                                <li>Quantity
                                    <div class="qty mt-5" style="float: right; margin-left: -70px">
                                        <span class="minus bg-dark">-</span>
                                        <input type="number" class="count" name="qty" value="1">
                                        <span class="plus bg-dark">+</span>
                                    </div>

                                </li><br/>

                                <li><button href="#contact" class="btn-add-to-cart" >Add to Cart</button></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end product detail -->
                    <div class="row fd-product-tabs information-product-content">
                        <ul class="nav nav-tabs ">
                            <li class="active"><a data-toggle="tab" href="#ptap-detail">Product Detail</a></li>
                            <li><a data-toggle="tab" href="#ptap-feedback">Feedback(0)</a></li>
                            <li><a data-toggle="tab" href="#ptap-video">Video</a></li>
                        </ul>
                        <div class="tab-content">
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
                    <img src="images/common/line.png" class="line-decoration" alt="">
                </div>
                <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
                    <h1 class="title-product"><b>AUCOSTIC GUITAR</b></h1>
                </div>
                <div class="col-lg-3 col-md-2 col-sm-1 col-xs-1">
                    <img src="images/common/line.png" class="line-decoration" alt="">
                </div>
            </div>
            <!-- product -->
            <div class="row is-flex">
                <?php
                for($i = 0;$i<4;$i++){
                    ?>
                    <div class="col-lg-3 col-md-3 col-sm-6 product">
                        <img src="images/product/product-2.png" alt="Avatar" style="width:100%">
                        <h4><b>Cordoba C1 3/4<br>$132.99</b></h4>
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
            <div class="clearfix"></div>
<!--            end button-->
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
<script src="js/increaseDecreaseQuantity.js"></script>
</html>	
