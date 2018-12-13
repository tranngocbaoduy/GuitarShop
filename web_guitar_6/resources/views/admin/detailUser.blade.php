@extends('layouts.app')
@extends('layouts.navigation_bar')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    @if(isset($user))
                        <div class="card-header">DETAIL USER</div>
                    @else
                        <div class="card-header">NEW USER</div>
                    @endif
                    <div class="card-body">
                        <div class="container">

                            <div class="row">
                                <table id="cart"
                                       class="table table-hover table-condensed table-responsive-sm table-responsive-lg table-responsive-xl table-responsive-md">
                                    @if(isset($user))
                                        <tr>
                                            <td style="width:20%">No.</td>
                                            <td><input style="width:50%" type="text" value="{{$user->id}}" readonly="true"></td>
                                        </tr>
                                        <tr>
                                            <td style="width:20%">Name.</td>
                                            <td><input style="width:50%" type="text" value="{{$user->name}}" id="name-user" name="name-user" ></td>
                                        </tr>
                                        <tr>
                                            <td style="width:20%">Email.</td>
                                            <td><input style="width:50%" type="text" value="{{$user->email}}" id="email-user" name="email-user" readonly="true"></td>
                                        </tr>
                                        <tr>
                                            <td style="width:20%">Old Password.</td>
                                            <td><input style="width:50%" type="text" value="" id="oldpwd-user" name="oldpwd-user"></td>
                                        </tr>
                                        <tr>
                                            <td style="width:20%">New Password.</td>
                                            <td><input style="width:50%" type="text" value="" id="newpwd-user" name="newpwd-user" ></td>
                                        </tr>
                                        <tr>
                                            <td style="width:20%">Re-New Password.</td>
                                            <td><input style="width:50%" type="text" value="" id="re-newpwd-user" name="re-newpwd-user"></td>
                                        </tr>
                                        <tr class="message-error">

                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><a href="/updateUser" class="btn btn-success" id="update-user">Accept</a>
                                                <a href="/manageUser"class="btn btn-info btn-warning">Back</a>
                                                <a href="/remove-user-id={{$user->id}}"
                                                   onclick="return confirm('Delete user !!!')"
                                                   class="btn btn-danger">Delete </a></td>
                                        </tr>
                                    @else
                                        <tr>
                                            <td >Name.</td>
                                            <td><input style="width:50%" type="text" value="" name="name-user" id="name-user"></td>

                                        </tr>
                                        <tr>
                                            <td >Password.</td>
                                            <td><input style="width:50%" type="text" value="" name="password-user" id="password-user"></td>

                                        </tr>
                                        <tr>
                                            <td >Email.</td>
                                            <td><input style="width:50%" type="text" value="" name="email-user" id="email-user"></td>
                                        </tr>
                                        {{--<tr>--}}
                                            {{--<td >Image.</td>--}}
                                            {{--<td>--}}
                                                {{--<input style="width:50%" type="text" value="" name="image-user" id="image-user">--}}
                                                {{--<button class="btn btn-info btn-light">+<i class="fa fa-refresh"></i>--}}
                                                {{--</button>--}}
                                            {{--</td>--}}
                                        {{--</tr>--}}
                                        <tr class="message-error">

                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <button id="create-new-user" class="btn btn-success" id="create-new-user">Accept</button>
                                                <a href="/home" class="btn btn-info btn-warning">Back</a>
                                            </td>
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
    <script src="{{url('asset/js/adjustUser.js')}}"></script>
    <link href="{{url('asset/css/home.css')}}" rel="stylesheet" type="text/css" media="all"/>
@endsection