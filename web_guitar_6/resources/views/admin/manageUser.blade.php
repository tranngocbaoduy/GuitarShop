@extends('layouts.app')
@extends('layouts.navigation_bar')


@section('content')

    <link href="{{ url('asset/css/home.css') }}" rel="stylesheet">

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                        <input id="defineUserOrProduct" value="" type="hidden">
                        <div class="card-header">All User</div>
                        <div class="card-body">
                            <div class="row">
                                <table id="allUser" class="display" style="width:400%">
                                    <thead>
                                    <tr>
                                        <th style="width:10%">No.</th>
                                        <th style="width:20%">Name</th>
                                        <th style="width:30%">Email</th>
                                        <th style="width:40%">Create At</th>
                                        {{--<th style="width:22%" class="text-center">Total Value</th>--}}
                                        {{--<th style="width:20%">Adjust</th>--}}
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th style="width:10%">No.</th>
                                        <th style="width:20%">Name</th>
                                        <th style="width:30%">Email</th>
                                        <th style="width:40%">Create At</th>
                                        {{--<th style="width:22%" class="text-center">Total Value</th>--}}
                                        {{--<th style="width:20%">Adjust</th>--}}
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>


                </div>
            </div>
        </div>
    </div>

    <script src="{{ url('asset/js/manageUser.js') }}"></script>
@endsection
