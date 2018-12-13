@extends('layouts.app')
@extends('layouts.navigation_bar')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">NEW CUSTOMER</div>
                    <div class="card-body">
                        <div class="container">

                            <div class="row">
                                <table id="cart"
                                       class="table table-hover table-condensed table-responsive-sm table-responsive-lg table-responsive-xl table-responsive-md">

                                    <tr>
                                        <td>Name.</td>
                                        <td><input style="width:50%" type="text" value="" name="name-customer"
                                                   id="name-customer"></td>

                                    </tr>
                                    <tr>
                                        <td>Email.</td>
                                        <td><input style="width:50%" type="email" name="email-customer"
                                                   id="email-customer"></td>
                                    </tr>
                                    <tr>
                                        <td>Password.</td>
                                        <td><input style="width:50%" type="password" value="" name="newpwd-customer"
                                                   id="newpwd-customer"></td>

                                    </tr>
                                    <tr>
                                        <td>Re-Password.</td>
                                        <td><input style="width:50%" type="password" value="" name="re-newpwd-customer"
                                                   id="re-newpwd-customer"></td>

                                    </tr>

                                    {{--<tr>--}}
                                    {{--<td >Image.</td>--}}
                                    {{--<td>--}}
                                    {{--<input style="width:50%" type="text" value="" name="image-customer" id="image-customer">--}}
                                    {{--<button class="btn btn-info btn-light">+<i class="fa fa-refresh"></i>--}}
                                    {{--</button>--}}
                                    {{--</td>--}}
                                    {{--</tr>--}}
                                    <tr class="message-error">

                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <button id="create-new-customer" class="btn btn-success"
                                                    id="create-new-customer">Accept
                                            </button>
                                            <a href="/home" class="btn btn-info btn-warning">Back</a>
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
    <script src="{{url('asset/js/createCustomer.js')}}"></script>
    <link href="{{url('asset/css/home.css')}}" rel="stylesheet" type="text/css" media="all"/>
@endsection