@extends('layouts.header')
@extends('layouts.navigation_bar')


@section('content')

        <div id="myCarousel" class="carousel slide" data-ride="carousel" >
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="asset/images/carousel/carousel2.png" alt="New York" width="100%" height="1000">
                    <div class="carousel-caption">
                        <h3>New York</h3>
                        <p>The atmosphere in New York is lorem ipsum.</p>
                    </div>
                </div>

                <div class="item">
                    <img src="asset/images/carousel/carousel1.png" alt="Chicago" width="100%" height="700">
                    <div class="carousel-caption">
                        <h3>Chicago</h3>
                        <p>Thank you, Chicago - A night we won't forget.</p>
                    </div>
                </div>

                <div class="item">
                    <img src="asset/images/carousel/carousel.png" alt="Los Angeles" width="100%" height="700">
                    <div class="carousel-caption">
                        <h3>LA</h3>
                        <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="container-fluid section" style="font-family: Quicksand">
            <div class="container" >

                <!-- section 2 -->
                <div class="row is-flex product-first"  style="box-sizing: border-box">
                    <div class="col-lg-4 col-md-2 col-sm-2 col-xs-1">
                        <img src="assets/images/common/line.png" alt="" class="line-decoration">
                    </div>
                    <div class="col-lg-4 col-md-8 col-sm-8 col-xs-10">
                        <h1 class="unit"><b>NEW PRODUCT</b></h1>
                    </div>
                    <div class="col-lg-4 col-md-2 col-sm-2 col-xs-1">
                        <img src="assets/images/common/line.png" alt="" class="line-decoration">
                    </div>
                </div>
                <div class="row is-flex list-product" id="new-product">
                    <!--                Product is be here-->
                </div>
                <div class="row is-flex" style="margin-top: 20px;text-align: center" >
                    <div class="col-lg-4 col-sm-3 col-xs-3"></div>
                    <div class="col-lg-4 col-sm-6 col-xs-6">
                        <button type="button" class="btn btn-default btn-more" id="btn-more-1">MORE</button>
                    </div>
                    <div class="col-lg-4 col-sm-3 col-xs-3"></div>
                </div>
                <div class="clearfix"></div>
                <!-- end section 2 -->

                <!-- section 3 -->
                <div class="row is-flex">
                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-1">
                        <img src="assets/images/common/line.png" alt="" class="line-decoration">
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-10">
                        <h1 class="unit"><b>BEST SELLER</b></h1>
                    </div>
                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-1">
                        <img src="assets/images/common/line.png" alt="" class="line-decoration">
                    </div>
                </div>
                <div class="row is-flex list-product" id="best-seller">
                    <!--            Product is be here-->
                </div>
                <div class="row is-flex" style="margin-top: 20px;text-align: center" >
                    <div class="col-lg-4 col-sm-3 col-xs-3"></div>
                    <div class="col-lg-4 col-sm-6 col-xs-6">
                        <button type="button" class="btn btn-default btn-more" id="btn-more-2">MORE</button>
                    </div>
                    <div class="col-lg-4 col-sm-3 col-xs-3"></div>
                </div>
                <div class="clearfix"></div>

                <!-- end section 4 -->

            </div>

            <!-- footer -->
            <div class="row is-flex notsection">
                @yield('layouts.footer')
            </div>
            <p class="store-year">© 2018 GUITAR FOR YOU - ALL RIGHTS RESERVED</p>
            <!-- end footer -->
        </div>
    {{--<script src="{{url('asset/js/adjustUser.js')}}"></script>--}}
{{--    <link href="{{url('asset/css/home.css')}}" rel="stylesheet" type="text/css" media="all"/>--}}
@endsection
