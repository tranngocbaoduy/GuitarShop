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
                <tbody id="your-cart">


                </tbody>
                <tfoot>
                <tr>
                    <td style="float: left;"><a href="/home" class="btn btn-warning"><i class="fa fa-angle-left"></i>
                            Continue Shopping</a></td>
                    <td colspan="3" class="hidden-xs"></td>
                    <td class="hidden-xs text-center">Total: $ <strong  id="total"></strong></td>
                    <td><a href="/payment" class="btn btn-success btn-block">Go to Payment<i
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