@extends('layouts.header')
@extends('layouts.carousel')
@section('content')
    <div class="container" style="font-family: Quicksand">
        <!-- section 2 -->
        <div class="row is-flex product-first" style="box-sizing: border-box;text-align: center">
            <div class="col-lg-4 col-md-2 col-sm-2 col-xs-1">
                <img src="asset/images/common/line.png" alt="" class="line-decoration">
            </div>
            <div class="col-lg-4 col-md-8 col-sm-8 col-xs-10">
                <h1 class="unit"><b>NEW PRODUCT</b></h1>
            </div>
            <div class="col-lg-4 col-md-2 col-sm-2 col-xs-1">
                <img src="asset/images/common/line.png" alt="" class="line-decoration">
            </div>
        </div>
        <div class="row is-flex list-product" id="new-product">
            <!--                Product is be here-->
            @foreach($products as $product)
                <div class="col-lg-3 col-md-6 col-sm-6 product">
                    <img src="uploads/{{($product->image)}}" alt="Avatar" style="width:100%">
                    <h4><b>{{$product->name}}<br>{{$product->price}}</b></h4>
                </div>
            @endforeach
        </div>
        <div class="row is-flex" style="margin-top: 20px;text-align: center">
            <div class="col-lg-4 col-sm-3 col-xs-3"></div>
            <div class="col-lg-4 col-sm-6 col-xs-6">
                <button type="button" class="btn btn-default btn-more" id="btn-more-1">MORE</button>
            </div>
            <div class="col-lg-4 col-sm-3 col-xs-3"></div>
        </div>
        <div class="clearfix"></div>
        <!-- end section 2 -->

        <!-- section 3 -->
        <div class="row is-flex" style="box-sizing: border-box;text-align: center">
            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-1">
                <img src="asset/images/common/line.png" alt="" class="line-decoration">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-10">
                <h1 class="unit"><b>BEST SELLER</b></h1>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-1">
                <img src="asset/images/common/line.png" alt="" class="line-decoration">
            </div>
        </div>
        <div class="row is-flex list-product" id="best-seller">
            <!--            Product is be here-->
            @foreach($products as $product)
                <div class="col-lg-3 col-md-6 col-sm-6 product">
                    <img src="uploads/{{($product->image)}}"  alt="Avatar" style="width:100%">
                    <h4><b>{{$product->name}}<br>{{$product->price}}</b></h4>
                </div>
            @endforeach
        </div>
        <div class="row is-flex" style="margin-top: 20px;text-align: center">
            <div class="col-lg-4 col-sm-3 col-xs-3"></div>
            <div class="col-lg-4 col-sm-6 col-xs-6">
                <button type="button" class="btn btn-default btn-more" id="btn-more-2">MORE</button>
            </div>
            <div class="col-lg-4 col-sm-3 col-xs-3"></div>
        </div>
        <div class="clearfix"></div>

        <!-- end section 3 -->
    </div>

    <script src="{{url('asset/js/indexPage.js')}}"></script>
    {{--    <link href="{{url('asset/css/home.css')}}" rel="stylesheet" type="text/css" media="all"/>--}}
    <link href="{{url('asset/css/indexPage.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{url('asset/css/carousel.css')}}" rel="stylesheet" type="text/css" media="all"/>
@endsection
@extends('layouts.footer')