@extends('layouts.app')
@extends('layouts.navigation_bar')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    @if(isset($product))
                        <div class="card-header">DETAIL PRODUCT</div>
                    @endif
                    <div class="card-body">
                        <div class="container">

                            <div class="row">
                                <table id="cart"
                                       class="table table-hover table-condensed table-responsive-sm table-responsive-lg table-responsive-xl table-responsive-md">
                                    @if(isset($product))
                                        <tr>
                                            <td style="width:20%">No.</td>
                                            <td><input style="width:50%" type="text" id="id-product"
                                                       value="{{$product->id}}" readonly="true"></td>
                                        </tr>
                                        <tr>

                                        </tr>
                                        <tr>
                                            <td style="width:20%">Name.</td>
                                            <td class="message-error-name">
                                                <input style="width:50%" type="text" name="name-product"
                                                       id="name-product" value="{{$product->name}}"></td>
                                        </tr>
                                        <tr>
                                            <td style="width:20%">Price.</td>
                                            <td class="message-error-price">
                                                <input style="width:50%" name="price-product" id="price-product"
                                                       type="text" value="{{$product->price}}" placeholder="$"></td>
                                        </tr>
                                        <tr>
                                            <td style="width:10%">Quantity.</td>
                                            <td class="message-error-quantity">
                                                <input style="width:50%" name="quantity-product" id="quantity-product"
                                                       type="text" value="{{$product->quantity}}"></td>
                                        </tr>
                                        <tr>
                                            <td>Category.</td>
                                            <td>
                                                <input type="hidden" id="get-choose-cate"
                                                       value="{{$product->id_category}}">
                                                <select style="width:50%" class="load-cate" disabled="true">
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:10%">Description.</td>
                                            <td class="message-error-des">
                                                <textarea name="des-product" id="des-product" style="width:50%"
                                                          type="text" value=""
                                                          style="border: 1px white;">{{$product->description}}</textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:10%">Image.</td>
                                            <td>
                                                <img src="uploads/{{($product->image)}}" width="50%">
                                                <button class="btn btn-info btn-light">+<i class="fa fa-refresh"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr class="message-error">
                                        </tr>
                                        <tr>
                                            <td></td>

                                            <td><a id="btn-update"  class="btn btn-success">Accept</a>
                                                <a href="/admin/viewAllProduct" class="btn btn-info btn-warning">Back</a>
                                                <a href="/admin/remove-product-id={{$product->id}}"
                                                   onclick="return confirm('Delete product !!!')"
                                                   class="btn btn-danger">Delete </a></td>
                                        </tr>
                                    @endif
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ url('asset/js/detailProduct.js') }}"></script>
    <link href="{{url('asset/css/home.css')}}" rel="stylesheet" type="text/css" media="all"/>
@endsection