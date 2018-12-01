@extends('layouts.header')
@extends('layouts.navigation_path')
@section('content')
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
    <link href="{{url('asset/css/yourCartPage.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <script src="asset/js/yourCartPage.js"></script>
    <script src="asset/js/increaseDecreaseQuantity.js"></script>
@endsection

@extends('layouts.footer')