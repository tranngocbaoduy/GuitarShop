<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="vendor/fonts/quicksand-opensan.css" rel="stylesheet">
    <script src="vendor/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="vendor/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" href="vendor/css/bootstrap.min.css"/>

    <link rel="stylesheet" href="assets/css/header.css"/>
    <link rel="stylesheet" href="assets/css/footer.css"/>
    <link rel="stylesheet" href="assets/css/navigationPath.css"/>
    <link rel="stylesheet" href="assets/css/yourCartPage.css"/>

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
                <h1 class="title-cart"><b>YOUR CART</b></h1>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-1 col-xs-1"></div>
        </div>
        <div class="row">
            <table id="cart" class="table table-hover table-condensed">
                <thead>
                <tr>
                    <th style="width:10%">No.</th>
                    <th style="width:40%">Product</th>
                    <th style="width:10%">Price</th>
                    <th style="width:8%">Quantity</th>
                    <th style="width:22%" class="text-center">Subtotal</th>
                    <th style="width:10%"></th>
                </tr>
                </thead>
                <tbody>
                <?php
                for ($i = 0; $i < 4; $i++) {
                    ?>
                    <tr>
                        <td><img src="assets/images/product/product-1.png" alt="Avatar" style="width:100%"></td>
                        <td data-th="Product">
                            <h4 class="nomargin">Cordoba C1 3/4</h4>
                        </td>
                        <td data-th="Price">$149.5 <?= $i ?></td>
                        <td data-th="Quantity">
                            <input type="number" class="form-control text-center" value="1">
                        </td>
                        <td data-th="Subtotal" class="text-center">$149.5</td>
                        <td class="actions" data-th="">
                            <button class="btn btn-info btn-delete">x<i class="fa fa-refresh"></i></button>
                        </td>
                    </tr>
                    <?php
                }
                ?>

                </tbody>
                <tfoot>
                <tr class="visible-xs">
                    <td class="text-center"><strong>Total 1.99</strong></td>
                </tr>
                <tr>
                    <td style="float: left;"><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i>
                            Continue Shopping</a></td>
                    <td colspan="3" class="hidden-xs"></td>
                    <td class="hidden-xs text-center"><strong>Total $1.99</strong></td>
                    <td><a href="payment.php" class="btn btn-success btn-block">Go to Payment<i
                                    class="fa fa-angle-right"></i></a></td>
                </tr>
                </tfoot>
            </table>
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
<script src="assets/js/yourCartPage.js"></script>
<script src="assets/js/increaseDecreaseQuantity.js"></script>
</html>	
