<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ url('js/jquery-3.3.1.min.js') }}" ></script>
    <script src="{{ url('js/bootstrap.js') }}" ></script>


    <script src="{{url('asset/js/responsivePage.js')}}"></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{url('asset/fonts/quicksand-opensan.css')}}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{url('css/bootstrap-theme.css')}}">
</head>
<body>
<div id="header">
    <link href="{{url('asset/css/header.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <script src="{{url('asset/js/header.js')}}"></script>
    <link href="{{url('asset/css/footer.css')}}" rel="stylesheet" type="text/css" media="all"/>
    {{--<script src="{{url('asset/js/footer.js')}}"></script>--}}

    <input type="hidden" id="check-btn" style="display:none" value="0">
    <nav class="navbar navbar-default ">
        {{--<div class="container-fluid">--}}
            <div class="navbar-header">
                <button type="button" class="navbar-toggle button-minimize" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="font-size: 2em;color:black" href="index.php">GUITAR FOR YOU</a>
            </div>
            <div class="collapse navbar-collapse navigation" id="myNavbar">
                <ul class="nav navbar-nav navigation" id="header">
                    <li><a id="home"href="/home">HOME</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">PRODUCT
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <!--                        <li><a href="product.php">Acoustic Guitar</a></li>-->
                            <!--                        <li><a href="product.php">Classical Guitar</a></li>-->
                            <!--                        <li><a href="product.php">Electric Guitar</a></li>-->
                            <!--                        <li><a href="product.php">Bass Guitar</a></li>-->
                            <!--                        <li><a href="product.php">Ukulele</a></li>-->
                        </ul>
                    </li>
                    <li><a href="/contact">CONTACT</a></li>


                </ul>


            </div>
            <div class=" my-input nav navbar-nav ">
                <div class="input-group" style="border-radius: 0px;float: right;">
                    <input type="text" class="form-control" placeholder="Search Your Guitar.." style="background-color: white;color:black">
                    <span class="input-group-btn">
						<button class="btn btn-default" type="button" style="border-radius: 0px">
							<span class="glyphicon glyphicon-search"></span>
						</button>
					</span>
                </div>
            </div>
        {{--</div>--}}
    </nav>
</div>
@yield('carousel')
<div class="container-fluid" >
@yield('navigation_path')
</div>
<main class="container" >
    @yield('navigation_left')
    @yield('content')
</main>
@yield('footer')

</body>
</html>