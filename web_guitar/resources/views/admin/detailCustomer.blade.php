@extends('layouts.app')
@extends('layouts.navigation_bar')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    @if(isset($customer))
                        <div class="card-header">DETAIL CUSTOMER</div>
                        <div class="card-body">
                            <div class="container">

                                <div class="row">
                                    <table id="cart"
                                           class="table table-hover table-condensed table-responsive-sm table-responsive-lg table-responsive-xl table-responsive-md">

                                        <tr>
                                            <td style="width:20%">No.</td>
                                            <td><input style="width:50%" type="text" value="{{$customer->id}}"
                                                       readonly="true"></td>
                                        </tr>
                                        <tr>
                                            <td style="width:20%">Name.</td>
                                            <td><input style="width:50%" type="text" value="{{$customer->name}}"
                                                       id="name-customer" name="name-customer"></td>
                                        </tr>
                                        <tr>
                                            <td style="width:20%">Email.</td>
                                            <td><input style="width:50%" type="text" value="{{$customer->email}}"
                                                       id="email-customer" name="email-customer" readonly="true"></td>
                                        </tr>
                                        <tr>
                                            <td style="width:20%">Address.</td>
                                            <td><input style="width:50%" type="text" value="{{$customer->address}}" id="address-customer"
                                                       name="address-customer"></td>
                                        </tr>
                                        <tr>
                                            <td style="width:20%">Phone.</td>
                                            <td><input style="width:50%" type="text" value="{{$customer->phone}}" id="phone-customer"
                                                       name="phone-customer"></td>
                                        </tr>
                                        <tr>
                                            <td style="width:20%">City.</td>
                                            <td><input style="width:50%" type="text" value="{{$customer->city}}" id="city-customer"
                                                       name="city-customer"></td>
                                        </tr>
                                        <tr class="hidden">
                                            <td style="width:20%">Old Password.</td>
                                            <td><input style="width:50%" type="text" value="" id="oldpwd-customer"
                                                       name="oldpwd-customer"></td>
                                        </tr>
                                        <tr class="hidden">
                                            <td style="width:20%">New Password.</td>
                                            <td><input style="width:50%" type="text" value="" id="newpwd-customer"
                                                       name="newpwd-customer"></td>
                                        </tr>
                                        <tr class="hidden">
                                            <td style="width:20%">Re-New Password.</td>
                                            <td><input style="width:50%" type="text" value="" id="re-newpwd-customer"
                                                       name="re-newpwd-customer"></td>
                                        </tr>
                                        <input type="hidden" id="showHideChangePassword" value="0">
                                        <tr class="message-error" style="display: none">

                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><a class="btn btn-success" id="update-customer">Accept</a>
                                                <a href="/admin/viewAllCustomer" class="btn btn-info btn-warning">Back</a>
                                                <a class="btn btn-danger " id="change-password">Change Password</a>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <script src="{{url('asset/js/adjustCustomer.js')}}"></script>
    <link href="{{url('asset/css/home.css')}}" rel="stylesheet" type="text/css" media="all"/>
@endsection