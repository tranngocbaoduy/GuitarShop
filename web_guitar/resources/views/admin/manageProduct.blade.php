@extends('layouts.app')
@extends('layouts.navigation_bar')


@section('content')

    <link href="{{url('asset/css/home.css') }}" rel="stylesheet">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <input id="defineUserOrProduct" value="1" type="hidden">
                    <div class="card-header">All Product</div>
                    <div class="card-body">
                        <div class="row">
                            <table id="allProduct" class="display" style="width:100%">
                                <thead>
                                <tr>
                                    <th style="width:10%">No.</th>
                                    <th style="width:20%">Product</th>
                                    <th style="width:20%">Image</th>
                                    <th style="width:10%">Price</th>
                                    <th style="width:10%">Quantity</th>
                                    <th style="width:20%">Create At</th>
                                    <th style="width:10%">Adjust</th>
                                </tr>
                                </thead>

                                {{--<tfoot display="none">--}}
                                    {{--<th style="width:10%">No.</th>--}}
                                    {{--<th style="width:20%">Product</th>--}}
                                    {{--<th style="width:20%"><img style="width:30%" src="/uploads/1543382021_product-8.png"></th>--}}
                                    {{--<th style="width:10%">Price</th>--}}
                                    {{--<th style="width:10%">Quantity</th>--}}
                                    {{--<th style="width:20%">Create At</th>--}}
                                    {{--<th style="width:10%">Adjust</th>--}}
                                {{--</tfoot>--}}
                            </table>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#allProduct').DataTable({
                serverSide: true,
                processing: true,
                responsive: true,
                ajax: "/getAllProductByLaratable",
                columns: [
                    {name: 'id'},
                    {name: 'name'},
                    {name: 'path', orderable: false},
                    {name: 'price'},
                    {name: 'quantity'},
                    {name: 'created_at'},
                    {name: 'action', orderable: false, searchable: false},

                ]
            });
        });
    </script>

@endsection
@push('scripts')
