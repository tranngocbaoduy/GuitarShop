@extends('layouts.header')
@extends('layouts.navigation_path')
@section('content')

    <div class="container">
        <div class="row is-flex">
            <div class="col-lg-3 col-md-2 col-sm-1 col-xs-1"></div>
            <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
                <h1 class="title-page"><b>CONTACT US</b></h1>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-1 col-xs-1"></div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-lg-8 col-sm-8 col-xs-12">
                <p>Contact us via any of the following methods during our business hours<br>Monday - Fridat 8:30 AM -
                    5:30 PM Pacific Time<br>Services@gamingzone.com<br>Phone: 1-(626)-854-9338 op. 4</p>
                <form name="my-login" action="/action_page.php" style="border-radius: 0px;opacity: 0.8;width: 80%;">

                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Your email" name="email"
                               style="">
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="pwd" placeholder="Your phone" name="pwd">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="pwd" placeholder="Your message" name="message" rows="5"
                                  cols="20"></textarea>
                    </div>
                    <p id="message"></p>
                    <button type="submit" class="btn btn-default" style="color:black;border-radius: 0px;width: 30%">
                        SEND
                    </button>
                </form>

            </div>
            <div class="col-lg-5 col-lg-4 col-sm-4 col-xs-12">
                <img width="100%" src="asset/images/common/logo.png" style="width:50%">
            </div>
        </div>
    </div>

    <script src="{{url('asset/js/contactPage.js')}}"></script>
    <link href="{{url('asset/css/contactPage.css')}}" rel="stylesheet" type="text/css" media="all"/>
@endsection

@extends('layouts.footer')