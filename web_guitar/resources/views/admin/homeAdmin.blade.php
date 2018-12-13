@extends('layouts.app')
@extends('layouts.navigation_bar')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">DETAIL ADMIN</div>
                    <div class="card-body">
                        <div class="container">

                            <div class="row">
                                <table id="cart"
                                       class="table table-hover table-condensed table-responsive-sm table-responsive-lg table-responsive-xl table-responsive-md">

                                        <tr>
                                            <td style="width:20%">No.</td>
                                            <td><input style="width:50%" type="text" value="{{ Auth::user()->id }}" readonly="true"> </td>
                                        </tr>
                                        <tr>
                                            <td style="width:20%">Name.</td>
                                            <td><input style="width:50%" type="text" value="{{ Auth::user()->name }}" id="name-user" name="name-user" ></td>
                                        </tr>
                                        <tr>
                                            <td style="width:20%">Email.</td>
                                            <td><input style="width:50%" type="text" value="{{ Auth::user()->email }}" id="email-user" name="email-user" readonly="true"></td>
                                        </tr>
                                        {{--<tr>--}}
                                            {{--<td style="width:20%">Old Password.</td>--}}
                                            {{--<td><input style="width:50%" type="text" value="" id="oldpwd-user" name="oldpwd-user"></td>--}}
                                        {{--</tr>--}}
                                        {{--<tr>--}}
                                            {{--<td style="width:20%">New Password.</td>--}}
                                            {{--<td><input style="width:50%" type="text" value="" id="newpwd-user" name="newpwd-user" ></td>--}}
                                        {{--</tr>--}}
                                        {{--<tr>--}}
                                            {{--<td style="width:20%">Re-New Password.</td>--}}
                                            {{--<td><input style="width:50%" type="text" value="" id="re-newpwd-user" name="re-newpwd-user"></td>--}}
                                        {{--</tr>--}}
                                        <tr class="message-error">

                                        </tr>
                                        <tr>
                                            {{--<td></td>--}}
                                            {{--<td><a href="/updateUser" class="btn btn-success" id="update-user">Accept</a>--}}
                                                {{--<a href="/manageUser"class="btn btn-info btn-warning">Back</a>--}}
                                                {{--<a href="/remove-user-id= {{ Auth::user()->name }} <"--}}
                                                   {{--onclick="return confirm('Delete user !!!')"--}}
                                                   {{--class="btn btn-danger">Delete </a></td>--}}
                                        </tr>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{url('adjustCustomer.jsr.js')}}"></script>
    <link href="{{url('asset/css/home.css')}}" rel="stylesheet" type="text/css" media="all"/>
@endsection