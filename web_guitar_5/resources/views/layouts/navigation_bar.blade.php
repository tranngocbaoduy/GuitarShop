
@section('navigation_bar')
    <div class="alert alert-success" role="alert">
        {{--<span>{{ session('status') }} You are logged in!</span>--}}
        <a href="/admin/home" class="btn btn-success" style="height: 100%">My Information</a>
        <a href="/admin/viewAllProduct" class="btn btn-light" style="height: 100%">Management Product</a>
        <a href="/admin/viewAllUser" class="btn btn-dark" style="height: 100%">Management User</a>
        <a href="/admin/new-product" class="btn btn-light" style="height: 100%">Create Product</a>
        <a href="/admin/new-user" class="btn btn-dark" style="height: 100%">Create User</a>
    </div>
@endsection