@extends('layouts.app')
@extends('layouts.navigation_bar')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                        <div class="card-header">NEW PRODUCT</div>

                    <div class="card-body">
                        <div class="container">

                            <div class="row">

                                <table id="cart"
                                       class="table table-hover table-condensed table-responsive-sm table-responsive-lg table-responsive-xl table-responsive-md">

                                        <tr>
                                            <td >Name.</td>
                                            <td><input style="width:50%" type="text" value="" name="name-product" id="name-product"></td>

                                        </tr>
                                        <tr>
                                            <td >Price.</td>
                                            <td ><input style="width:50%" type="text" value="" placeholder="$" name="price-product"
                                                       id="price-product"></td>
                                        </tr>
                                        <tr>
                                            <td >Quantity.</td>
                                            <td><input style="width:50%" type="text" value=""  name="quantity-product"
                                                       id="quantity-product"></td>
                                        </tr>
                                        <tr>
                                            <td >Description.</td>
                                            <td><input style="width:50%" type="text" value="" name="des-product" id="des-product"></td>
                                        </tr>
                                        <tr>
                                            <td >Category.</td>
                                            <td>
                                                <input   type="hidden" id="get-choose-cate" value="Choose .." required>
                                                <select class="load-cate" style="width:50%">
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td >Image.</td>
                                            <td>
                                                <form id="my-form-upload" enctype="multipart/form-data" method="POST">
                                                    {{csrf_field()}}
                                                    <img src="" id="yourImgTag" width="50%">
                                                    <input style="width:50%" id="upload-file" type="file" value="" name="image-product" id="image-product" required>

                                                </form>
                                                {{--<button class="btn btn-info btn-light">+<i class="fa fa-refresh"></i>--}}
                                                {{--</button>--}}
                                            </td>
                                        </tr>
                                        <tr class="message-error">

                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <button id="create-new-product" class="btn btn-success">Accept</button>
                                                <a href="/login" class="btn btn-info btn-warning">Back</a>
                                            </td>
                                        </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{url('asset/js/createProduct.js')}}"></script>
    <link href="{{url('asset/css/home.css')}}" rel="stylesheet" type="text/css" media="all"/>
@endsection