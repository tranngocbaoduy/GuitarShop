@extends('layouts.app')
@extends('layouts.navigation_bar')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">NEW USER</div>
                    <div class="card-body">
                        <div class="container">

                            <div class="row">
                                <table id="cart"
                                       class="table table-hover table-condensed table-responsive-sm table-responsive-lg table-responsive-xl table-responsive-md">

                                        <tr>
                                            <td >Name.</td>
                                            <td><input style="width:50%" type="text" value="" name="name-user" id="name-user"></td>

                                        </tr>
                                        <tr>
                                            <td >Password.</td>
                                            <td><input style="width:50%" type="password" value="" name="newpwd-user" id="newpwd-user"></td>

                                        </tr>
                                        <tr>
                                            <td >Re-Password.</td>
                                            <td><input style="width:50%" type="password" value="" name="re-newpwd-user" id="re-newpwd-user"></td>

                                        </tr>
                                        <tr>
                                            <td >Email.</td>
                                            <td><input style="width:50%" type="email"  name="email-user" id="email-user"></td>
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
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{url('asset/js/createUser.js')}}"></script>
    <link href="{{url('asset/css/home.css')}}" rel="stylesheet" type="text/css" media="all"/>
@endsection