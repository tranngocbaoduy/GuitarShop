@extends('layouts.header')
@extends('layouts.navigation_path')
@section('content')
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <div class="container" id="my-signup">
        <div class="row is-flex">
            <div class="col-lg-3 col-md-2 col-sm-1 col-xs-1"></div>
            <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
                <h1 class="title-page"><b>ONE LOGIN TO ALL SERVICE</b></h1>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-1 col-xs-1"></div>
        </div>
        <div class="row form-login-input">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 login-input">
                <div class="row">
                    <form >
                        <div class="form-group">
                            <!--                        <label for="Name">Name:</label>-->
                            <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group">
                            <!--                        <label for="pwd">Password:</label>-->
                            <input type="password" class="form-control" id="password" placeholder="Enter password"
                                   name="password">
                        </div>
                        <div class="form-group">
                            <!--                        <label for="pwd">Re Password:</label>-->
                            <input type="password" class="form-control" id="re-password" placeholder="Enter Re-password"
                                   name="re-password">
                        </div>
                        <div class="form-group">
                            <div class=" alert alert-warning message-error " style="display: none;color:red">
                            </div>
                        </div>
                        {{--<div class="form-group" id="my-captcha">--}}
                            {{--<div class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S" ></div>--}}
                        {{--</div>--}}
                        <div class="form-group">
                            <!--                        <label for="pwd">Password:</label>-->
                            <input class="check-box-accept" type="checkbox" id="cb-accept"> I accept the Terms and
                            Condition
                        </div>
                        <div class="form-group">
                            <!--                        <label for="pwd">Password:</label>-->
                            <input class="" type="checkbox" id="cb-agree"> I agree to receive
                            email & phone communications
                        </div>
                        <button type="button" class="btn btn-default btn-submit">Register</button>

                        <div class="alert alert-warning" style="display: none" id="error-message">
                            <strong>Warning!</strong> Indicates a warning that might need attention.
                        </div>
                    </form>
                </div>
                <div class="row btn-login-with-social-media">
                    <h4 class="h4-title-login-with-social-media">Login via social media</h4>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <button type="button" class="btn btn-default btn-google">Google</button>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <button type="button" class="btn btn-default btn-facebook">Facebook</button>
                    </div>

                </div>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
    <script src="{{url('asset/js/signUpPage.js')}}"></script>
    <link href="{{url('asset/css/loginPage.css')}}" rel="stylesheet" type="text/css" media="all"/>
@endsection

@extends('layouts.footer')