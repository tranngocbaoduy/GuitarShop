@extends('layouts.header')
@extends('layouts.navigation_path')

@section('content')

    <link href="{{url('asset/css/paymentPage.css')}}" rel="stylesheet">

    <div class="container your-payment">
        <div class="row is-flex">
            <div class="col-lg-3 col-md-2 col-sm-1 col-xs-1"></div>
            <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
                <h1 class="title-page"><b>YOUR PAYMENT</b></h1>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-1 col-xs-1"></div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="row" style="padding:0px;margin:0px">
                    <h5><span class="badge">!</span><b> Personal Information</b></h5>
                    <form class="info-user" onsubmit="return validateInput()" method="GET">
                        <div class="form-group name-info-user">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="f-name" placeholder="Enter frist name"
                                           name="f-name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="l-name" placeholder="Enter last name"
                                           name="l-name">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="address" placeholder="Enter address"
                                   name="address">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" id="phone" placeholder="Enter phone" name="phone">
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
                                    <input type="text" class="form-control" id="code" placeholder="Enter Postal Code"
                                           name="code">
                                </div>
                            </div>
                        </div>
                        <p id="error-message"></p>
                    </form>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5 login-input">
                <div class="row">
                    <h5><span class="badge">!</span><b> Payment Method</b></h5>
                    <form name="my-login" method="GET">
                        <div class="form-group image-bank">
                            <img src="asset/images/common/bank.png" width="50px">
                            <img src="asset/images/common/visa.png" width="50px">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="card-name" placeholder="Enter card name"
                                   name="card-name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="card-number" placeholder="Enter card number"
                                   name="card-number">
                        </div>
                        <div class="form-group">
                            <div class="form-inline info-card-bank">
                                <p>DATE</p>
                                <input type="number" class="form-control" placeholder="CVV Code" id="num-1"
                                       name="nume-1">
                                <input type="date" class="form-control" id="num-1" name="nume-1">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <div class="form-inline">
                                <strong id="total">Total: $456</strong>
                                <input class="form-control" type="text" style="visibility: hidden">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-submit btn-payment form-control">Payment</button>
                        </div>

                    </form>
                    <div class="alert alert-warning message-error" style="display: none;color:red">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button class="btn btn-success btn-bill"  data-toggle="modal" data-target="#myModal" style="display:none;">Bill</button>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" id="cancelAdd"><span
                                class="glyphicon glyphicon-share"></span></button>
                    <h2 style="color: tomato"><span class="glyphicon glyphicon-shopping-cart"></span> Your Bill</h2>
                    <h4 class="label label-success" style="width: 80%">You ordered successful !!!</h4>
                </div>
                <div class="modal-body">
                    <div id="info-customer"></div>

                    <table class="table table-hover" width="100%">
                        <thead>
                        <tr>
                            <td style="opacity: 0.4;font-weight: bold">No.</td>
                            <td style="opacity: 0.4;font-weight: bold">Name.</td>
                            <td style="opacity: 0.4;font-weight: bold">Price.</td>
                            <td style="opacity: 0.4;font-weight: bold">Quantity.</td>
                        </tr>
                        </thead>
                        <tbody id="info-product"></tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="cancelAdd" class="btn btn-danger btn-default pull-left"
                            data-dismiss="modal">
                        <span class="glyphicon glyphicon-remove"></span> Cancel
                    </button>
                    <p><a href="#"> Help ?</a></p>
                </div>
            </div>
        </div>
    </div>
    <script src="{{url('asset/js/responsivePage.js')}}"></script>
    <script src="{{url('asset/js/paymentPage.js')}}"></script>

@endsection
@extends('layouts.footer')