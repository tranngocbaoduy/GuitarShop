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
                    <li><a href="#">My Order</a></li>
                    <li><a href="#">Address Book</a></li>
                </ul>

            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" id="info">
                <div class="row is-flex account-info-general">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 style="font-family: Arvo;font-size: 20px;">Personal Profile Ajust</h1><br/>
                        <form class="info-user" onsubmit="return validateInput()" method="GET">
                            <div class="form-group name-info-user">

                                <input type="text" class="form-control" id="name"  placeholder="Enter name"
                                       name="name">

                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="address" placeholder="Enter address"
                                       name="address">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" readonly placeholder="Enter email"
                                       name="email">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" id="phone" placeholder="Enter phone"
                                       name="phone">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="city" placeholder="Enter city" name="city">
                            </div>
                            <div class="form-group name-info-user">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <select class="form-control" id="country">
                                            <option value="0">Your Country</option>
                                            <option value="VN">VN</option>
                                            <option value="Phap">Phap</option>
                                            <option value="Japaneses">Japaneses</option>
                                            <option value="Korea">Korea</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="code"
                                               placeholder="Enter Postal Code"
                                               name="code">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-success btn-update-info form-control">Update
                                    Information
                                </button>
                            </div>
                        </form>
                        <div class="alert alert-warning message-error" style="display: none;color:red">
                        </div>
                    </div>
                </div>
            </div>

            {{--end section 2--}}
        </div>
        <link href="{{url('asset/css/contactPage.css')}}" rel="stylesheet" type="text/css" media="all"/>
        <script src="asset/js/adjustAccountCustomer.js"></script>
        <script src="asset/js/checkLoginYet.js"></script>

@endsection

@extends('layouts.footer')