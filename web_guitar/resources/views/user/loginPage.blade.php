@extends('layouts.header')
@extends('layouts.navigation_path')
@section('content')

    <div class="container" id="my-login">
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
                    <form id="login-form" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" placeholder="Enter email"
                                   name="email" value="">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" placeholder="Enter password"
                                   name="password" value="">
                        </div>
                        <div class="form-group">
                            <input class="check-box" type="checkbox" name="remember"> Remember me
                            <span class="forget-pass"><a href="#">Forgot Password ?</a></span>
                        </div>
                        <div class="form-group">
                            <div class="alert alert-warning message-error" style="display: none;color:red">
                            </div>
                            <button type="button" class="btn btn-default btn-submit">Sign In
                            </button>
                            <button type="button" class="btn btn-default btn-create-new-account"><a href="/userSignUp">Create
                                    New Account</a></button>
                            {{--<div class="alert alert-warning" style="display: none" id="error-message">--}}
                                {{--<strong>Warning!</strong> Indicates a warning that might need attention.--}}
                            {{--</div>--}}
                            <input type="text" value="0" class="wrong-sign-in" hidden>
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
    <script src="{{url('asset/js/loginPage.js')}}"></script>
    <link href="{{url('asset/css/loginPage.css')}}" rel="stylesheet" type="text/css" media="all"/>
@endsection

@extends('layouts.footer')