@extends('layouts.header')
@extends('layouts.navigation_path')
@section('content')
    <div class="container">
        <div class="row ">
            @extends('layouts.navigation_left')
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="row is-flex">
                    <div class="col-lg-3 col-md-2 col-sm-1 col-xs-1">
                        <img src="asset/images/common/line.png" class="line-decoration" alt="">
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12" style="text-align: center">
                        <h1 class="unit"><b>{{$category->name}}</b></h1>
                    </div>
                    <div class="col-lg-3 col-md-2 col-sm-1 col-xs-1">
                        <img src="asset/images/common/line.png" class="line-decoration" alt="">
                    </div>
                </div>
                <!-- product -->
                <input type="hidden" value="{{$category->id}}" id="hold-id-cate">
                <input type="hidden" value="3" id="hold-skip-product">
                <div class="row is-flex" id="list-product-by-cate">
                    @foreach($sum[0] as $product)
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 product" id="{{$product->id}}">
                            <img src="uploads/{{($product->image)}}"  alt="Avatar" style="width:100%">
                            <h4><b>{{$product->name}}<br>{{$product->price}}</b></h4>
                        </div>
                    @endforeach
                </div>
                <!-- end product 3 -->

                <!-- button -->
                <div class="row is-flex" style="margin-top: 20px;text-align: center">
                    <div class="col-lg-4 col-sm-3 col-xs-3"></div>
                    <div class="col-lg-4 col-sm-6 col-xs-6">
                        <button type="button" class="btn btn-default btn-more"
                                style="color:black;border-radius: 0px;margin-top: 20px;width: 100%" id="btn-more-1">MORE
                        </button>
                    </div>
                    <div class="col-lg-4 col-sm-3 col-xs-3"></div>
                </div>
                <div class="clearfix"></div>

                <!-- end button -->
            </div>
        </div>

        {{--section 2--}}
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
            @foreach($sum[1] as $product)
                <input type="hidden" value="4" id="hold-skip-product-2">
                <div class="col-lg-3 col-md-6 col-sm-6 product"  id="{{$product->id}}">
                    <img src="asset/images/best-seller.png" style="width:18%;position:absolute;top:15px;right:15px;z-index:10;" alt="best-seller">
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

        {{--end section 2--}}
    </div>
    <link href="{{url('asset/css/productPage.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <script src="asset/js/productPage.js"></script>
    {{--<script src="assets/js/responsivePage.js"></script>--}}
@endsection

@extends('layouts.footer')