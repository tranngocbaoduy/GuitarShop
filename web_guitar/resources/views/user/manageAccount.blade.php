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

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <ul class="account-info-general navi" id="account-direct">
                    <li><strong>My Account</strong></li>
                    <li><a href="/myAccount">My Profile</a></li>
                    <li><a href="/myOrder">My Order</a></li>
                    <li><a href="#">Address Book</a></li>
                </ul>

            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" id="info">
                <div class="row is-flex account-info-general">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <ul  id="account-info">
                            <li><strong>Personal Profile</strong> | <a href="/ajustAccount" style="opacity: 0.5">EDIT</a></li>
                            <hr>
                            {{--Info Customer will be here--}}
                            {{--<li><a href="#">My Profile</a> </li>--}}
                            {{--<li><a href="#">My Order</a> </li>--}}
                            {{--<li><a href="#">Address Book</a> </li>--}}
                        </ul>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                        <ul id="account-shipping">
                            <li><strong>Address Book</strong></li><hr/>


                        </ul>

                    </div>
                </div>
            </div>


            {{--end section 2--}}
        </div>
        <link href="{{url('asset/css/contactPage.css')}}" rel="stylesheet" type="text/css" media="all"/>
        <script src="asset/js/infoCustomerPage.js"></script>

    {{--<script src="assets/js/responsivePage.js"></script>--}}
@endsection

@extends('layouts.footer')