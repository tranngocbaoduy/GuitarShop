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
                    <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12 cate-product">
                        <!--                        Category of product will be here-->
                    </div>
                    <div class="col-lg-3 col-md-2 col-sm-1 col-xs-1">
                        <img src="asset/images/common/line.png" class="line-decoration" alt="">
                    </div>
                </div>
                <div class="row" id="info-product">
                    <!--        information common of product will be here-->

                </div>
                <!-- end product detail -->
                <div class="row fd-product-tabs information-product-content">
                    <ul class="nav nav-tabs ">
                        <li class="active"><a data-toggle="tab" href="#ptap-detail">Product Detail</a></li>
                        <li><a data-toggle="tab" href="#ptap-feedback">Feedback(0)</a></li>
                        <li><a data-toggle="tab" href="#ptap-video">Video</a></li>
                    </ul>
                    <div class="tab-content" id="detail-product">
                        <div id="ptap-detail" class="tab-pane fade in active">
                            <li>Brand Name: <b>Cordoba</b></li>
                            <li>Type: <b>Acoustic Guitar</b></li>
                            <li>Suitable For: <b>Beginner, Unisex, Professional Performance, Home-schooling</b></li>
                            <li>Model Number: <b>AGT16</b></li>
                            <li>Pickup: none</li>
                            <li>Tone Position: <b>18</b></li>
                        </div>
                        <div id="ptap-feedback" class="tab-pane fade">
                            <p>Feeldback here</p>
                        </div>
                        <div id="ptap-video" class="tab-pane fade">
                            <p>Video here</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--section 2--}}
        <div class="row is-flex" style="box-sizing: border-box;text-align: center;">
            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-1">
                <img src="asset/images/common/line.png" alt="" class="line-decoration">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-10 cate-product-more" >
                <!--                        Category of product will be here-->
            </div>
            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-1">
                <img src="asset/images/common/line.png" alt="" class="line-decoration">
            </div>
        </div>
        <div class="row is-flex list-product" id="product-same-category-more">
            <!--            Product is be here-->
            <input type="hidden" value="{{$productSameCategory[0]->id_category}}" id="hold-id-cate">
            <input type="hidden" value="4" id="hold-skip-product">
            @foreach($productSameCategory as $product)
                <div class="col-lg-3 col-md-6 col-sm-6 product" id="{{$product->id}}">
                    <img src="uploads/{{($product->image)}}"  alt="Avatar" style="width:100%">
                    <h4><b>{{$product->name}}<br>{{$product->price}}</b></h4>
                </div>
            @endforeach
        </div>
        <div class="row is-flex" style="margin: 40px 0;text-align: center">
            <div class="col-lg-4 col-sm-3 col-xs-3"></div>
            <div class="col-lg-4 col-sm-6 col-xs-6">
                <button type="button" class="btn btn-default btn-more" id="btn-more-product">MORE</button>
            </div>
            <div class="col-lg-4 col-sm-3 col-xs-3"></div>
        </div>
        <div class="clearfix"></div>

        {{--end section 2--}}
    </div>
    <link href="{{url('asset/css/productDetailPage.css')}}" rel="stylesheet" type="text/css" media="all"/>
    {{--<script src="asset/js/productPage.js"></script>--}}
    <script src="asset/js/productDetailPage.js"></script>
@endsection

@extends('layouts.footer')