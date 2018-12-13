@extends('layouts.header')
@extends('layouts.navigation_path')
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-lg-3 col-md-2 col-sm-1 col-xs-1"></div>
            <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
                <h1 class="title-page"><b>MANAGEMENT ACCOUNT</b></h1>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-1 col-xs-1"></div>
        </div>
        <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-3 direct-customer">
                <ul class="account-info-general navi" id="account-direct">
                    <li><strong>My Account</strong></li>
                    <li><a href="/myAccount">My Profile</a></li>
                    <li><a href="/myOrder">My Order</a></li>
                    <li><a href="#">Address Book</a></li>
                </ul>

            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12" id="info">
                <div class="row is-flex">
                    <div class="col-lg-3 col-md-2 col-sm-1 col-xs-1"></div>
                    <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
                        <h1 class="title-cart"><b>MY ORDER</b></h1>
                    </div>
                    <div class="col-lg-3 col-md-2 col-sm-1 col-xs-1"></div>
                </div>
                <div class="row">
                    <table id="cart" class="table table-hover table-condensed">
                        <thead>
                        <tr>
                            <th style="width:10%">Order At.</th>
                            <th style="width:20%">No.</th>
                            <th style="width:30%">Name</th>
                            <th style="width:10%">Price</th>
                            <th style="width:10%">Quantity</th>
                            <th style="width:10%" class="text-center">Subtotal</th>
                            <th style="width:10%">Ajust</th>
                        </tr>
                        </thead>
                        <tbody id="my-order">
                        <tr>
                            <td colspan="7">
                                You're not use to order
                                <a href="/home" class="btn btn-warning"><i class="fa fa-angle-left"></i>
                                    Go Shopping Now<span
                                            class="glyphicon glyphicon-shopping-cart"></span></a>
                            </td>
                        </tr>
                        </tbody>
                        <tfoot>
                        {{--<tr>--}}
                        {{--<td style="float: left;"><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i>--}}
                        {{--Continue Shopping</a></td>--}}
                        {{--<td colspan="3" class="hidden-xs"></td>--}}
                        {{--<td class="hidden-xs text-center">Total: $ <strong  id="total"></strong></td>--}}
                        {{--<td><a href="#" class="btn btn-success btn-block">Go to Payment<i--}}
                        {{--class="fa fa-angle-right"></i></a></td>--}}
                        {{--</tr>--}}
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

            {{--end section 2--}}
        </div>
        <link href="{{url('asset/css/contactPage.css')}}" rel="stylesheet" type="text/css" media="all"/>
        <link href="{{url('asset/css/myOrderPage.css')}}" rel="stylesheet" type="text/css" media="all"/>
        <script src="{{url('asset/js/myOrderPage.js')}}"></script>
    <script src="{{url('asset/js/checkLoginYet.js')}}"></script>

    {{--<script src="assets/js/responsivePage.js"></script>--}}
@endsection

@extends('layouts.footer')