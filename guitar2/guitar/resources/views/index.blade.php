
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="product.css" />
    <link rel="stylesheet" href="home.css" />
</head>
<body>
<input type="text" id="check-btn" style="display:none" value="0">
<nav class="navbar navbar-default ">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle button-minimize" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="font-size: 2em;color:black" href="#myPage">GUITAR FOR YOU</a>
        </div>
        <div class="collapse navbar-collapse navigation" id="myNavbar">
            <ul class="nav navbar-nav navigation" id="header">
                <li><a id="home"href="home1.html">HOME</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">PRODUCT
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="product.html">Acoustic Guitar</a></li>
                        <li><a href="product.html">Classical Guitar</a></li>
                        <li><a href="product.html">Electric Guitar</a></li>
                        <li><a href="product.html">Bass Guitar</a></li>
                        <li><a href="product.html">Ukulele</a></li>
                    </ul>
                </li>
                <li><a href="#band">CONTACT</a></li>
                <li><a href="#tour">LOGIN</a></li>
                <li><a href="#contact"  >CART</a></li>
            </ul>


        </div>
        <div class="row my-input nav navbar-nav ">
            <div class="input-group" style="border-radius: 0px;float: right;">
                <input type="text" class="form-control" placeholder="Search Your Guitar.." style="background-color: white;color:black">
                <span class="input-group-btn">
						<button class="btn btn-default" type="button" style="border-radius: 0px">
							<span class="glyphicon glyphicon-search"></span>
						</button>
					</span>
            </div>
        </div>
</nav>

<!-- end header -->

<!-- carousel -->
<div id="myCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="../images/carousel2.png" alt="New York" width="100%" height="700">
            <div class="carousel-caption">
                <h3>New York</h3>
                <p>The atmosphere in New York is lorem ipsum.</p>
            </div>
        </div>

        <div class="item">
            <img src="../images/carousel1.png" alt="Chicago" width="100%" height="700">
            <div class="carousel-caption">
                <h3>Chicago</h3>
                <p>Thank you, Chicago - A night we won't forget.</p>
            </div>
        </div>

        <div class="item">
            <img src="../images/carousel.png" alt="Los Angeles" width="100%" height="700">
            <div class="carousel-caption">
                <h3>LA</h3>
                <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
            </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- end carousel -->

<div class="container-fluid section" style="font-family: Quicksand">
    <div class="container" >

        <!-- section 2 -->
        <div class="row is-flex product-first">
            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-1">
                <img src="../images/line.png"  alt="" class="line-decoration">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-10">
                <h1 class="unit"><b>NEW PRODUCT</b></h1>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-1">
                <img src="../images/line.png"  alt="" class="line-decoration">
            </div>
        </div>
        <div class="row is-flex list-product" >
            <div class="col-lg-3 col-md-6 col-sm-6 product">
                <img src="../images/product-1.png" alt="Avatar" style="width:100%">
                <h4><b>Cordoba C1 3/4<br>$132.99</b></h4>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 product">
                <img src="../images/product-2.png" alt="Avatar" style="width:100%">
                <h4><b>Takamine P5DC<br>$132.99</b></h4>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 product">
                <img src="../images/product-3.png" alt="Avatar" style="width:100%">
                <h4><b>Fender Ukulele Hau'oli, Laminated Mahogany<br>$89.99</b></h4>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 product">
                <img src="../images/product-3.png" alt="Avatar" style="width:100%">
                <h4><b>Fender Ukulele Hau'oli, Laminated Mahogany<br>$89.99</b></h4>
            </div>
        </div>
        <div class="row is-flex" style="margin-top: 20px;text-align: center">
            <div class="col-lg-4 col-sm-3 col-xs-3"></div>
            <div class="col-lg-4 col-sm-6 col-xs-6">
                <button type="button" class="btn btn-default btn-more">MORE</button>
            </div>
            <div class="col-lg-4 col-sm-3 col-xs-3"></div>
        </div>
        <div class="clearfix"></div>
        <!-- end section 2 -->

        <!-- section 3 -->
        <div class="row is-flex">
            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-1">
                <img src="../images/line.png"  alt="" class="line-decoration">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-10">
                <h1 class="unit"><b>BEST SELLER</b></h1>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-1">
                <img src="../images/line.png"  alt="" class="line-decoration">
            </div>
        </div>
        <div class="row is-flex list-product">
            <div class="col-lg-3 col-md-6 col-sm-6 product">
                <img src="../images/product-1.png" alt="Avatar" style="width:100%">
                <h4><b>Cordoba C1 3/4<br>$132.99</b></h4>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 product">
                <img src="../images/product-2.png" alt="Avatar" style="width:100%">
                <h4><b>Takamine P5DC<br>$132.99</b></h4>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 product">
                <img src="../images/product-3.png" alt="Avatar" style="width:100%">
                <h4><b>Fender Ukulele Hau'oli, Laminated Mahogany<br>$89.99</b></h4>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 product">
                <img src="../images/product-3.png" alt="Avatar" style="width:100%">
                <h4><b>Fender Ukulele Hau'oli, Laminated Mahogany<br>$89.99</b></h4>
            </div>
        </div>
        <div class="row is-flex" style="margin-top: 20px;text-align: center">
            <div class="col-lg-4 col-sm-3 col-xs-3"></div>
            <div class="col-lg-4 col-sm-6 col-xs-6">
                <button type="button" class="btn btn-default btn-more">MORE</button>
            </div>
            <div class="col-lg-4 col-sm-3 col-xs-3"></div>
        </div>
        <div class="clearfix"></div>

        <!-- end section 3 -->

        <!-- section 4 -->
        <div class="row is-flex">
            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-1">
                <img src="../images/line.png"  alt="" class="line-decoration">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-10">
                <h1 class="unit"><b>SELL OFF</b></h1>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-1">
                <img src="../images/line.png"  alt="" class="line-decoration">
            </div>
        </div>
        <div class="row is-flex list-product">
            <div class="col-lg-3 col-md-6 col-sm-6 product">
                <img src="../images/product-1.png" alt="Avatar" style="width:100%">
                <h4><b>Cordoba C1 3/4<br>$132.99</b></h4>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 product">
                <img src="../images/product-2.png" alt="Avatar" style="width:100%">
                <h4><b>Takamine P5DC<br>$132.99</b></h4>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 product">
                <img src="../images/product-3.png" alt="Avatar" style="width:100%">
                <h4><b>Fender Ukulele Hau'oli, Laminated Mahogany<br>$89.99</b></h4>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 product">
                <img src="../images/product-3.png" alt="Avatar" style="width:100%">
                <h4><b>Fender Ukulele Hau'oli, Laminated Mahogany<br>$89.99</b></h4>
            </div>
        </div>
        <div class="row is-flex" >
            <div class="col-lg-4 col-sm-3 col-xs-3"></div>
            <div class="col-lg-4 col-sm-6 col-xs-6">
                <button type="button" class="btn btn-default btn-more" >MORE</button>
            </div>
            <div class="col-lg-4 col-sm-3 col-xs-3"></div>
        </div>
        <div class="clearfix"></div>

        <!-- end section 4 -->

    </div>

    <!-- footer -->
    <div class="row is-flex notsection">
        <div class="col-lg-4 col-md-5 col-sm-12 footer-left">
            <p>Contact us via any of the following methods during our business hours<br>Monday - Fridat 8:30 AM - 5:30 PM 	Pacific Time<br>Services@gamingzone.com<br>Phone:1-(626)-854-9338 op. 4</p>
        </div>
        <div class="col-lg-8 col-md-7 col-sm-12 footer-right" >
            <div class="row is-flex">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <ul class="footer-navigation">
                        <li><b>Products</b></li><br/><br/>
                        <li><a href="#">Acoustic Guitar</a></li><br/>
                        <li><a href="#">Classical Guitar</a></li><br/>
                        <li><a href="#">Electric Guitar</a></li><br/>
                        <li><a href="#">Bass Guitar</a></li><br/>
                        <li><a href="#">Ukulele</a></li><br/>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <ul class="footer-navigation">
                        <li><b>Brands</b></li><br/><br/>
                        <li><a href="#">Charvel</a></li><br/>
                        <li><a href="#">Cordoba</a></li><br/>
                        <li><a href="#">EVH</a></li><br/>
                        <li><a href="#">Fender</a></li><br/>
                        <li><a href="#">Gretsch</a></li><br/>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <ul class="footer-navigation">
                        <li><b>Contact </b></li><br/><br/>
                        <li><a href="#">Fanpage</a></li><br/>
                        <li><a href="#">Twitter</a></li><br/>
                        <li><a href="#">Follow us</a></li><br/>
                        <li><a href="#">Comunity</a></li><br/>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <ul class="footer-navigation">
                        <li><b>Videos</b></li><br/><br/>
                        <li><a href="#">Live Stream</a></li><br/>
                        <li><a href="#">Video Tutorial</a></li><br/>
                        <li><a href="#">All Video</a></li><br/>
                        <li><a href="#">Gallery</a></li><br/>
                    </ul>
                </div>

            </div>
        </div>

    </div>
    <p class="store-year">© 2018 GUITAR FOR YOU - ALL RIGHTS RESERVED</p>

    <div class="clearfix"></div>
    <!-- end footer -->
</div>
</body>
<script>
    $(document).ready(function(){
        $(window).resize(function(){
            $(".input-group input").val($(window).width());
            if(parseInt($(window).width()) <=1318){
                $("#header").addClass("navbar-right");
                $("my-input").removeClass("navbar-right");
            }else{
                $("#header").removeClass("navbar-right");
            }
            if(parseInt($(window).width()) <=800){
                $("my-input").removeClass("navbar-right");
            }else{
                $("my-input").addClass("navbar-right");
            }
        });
        $(".input-group input").val($(window).width());
        if(parseInt($(window).width()) <=1318){
            $("#header").addClass("navbar-right");
            $("my-input").removeClass("navbar-right");
        }else{
            $("#header").removeClass("navbar-right");

        }
        if(parseInt($(window).width()) <=800){
            $("my-input").removeClass("navbar-right");
        }else{
            $("my-input").addClass("navbar-right");
        }

        $(".navbar-header button").click(function(){
            if($("#check-btn").val()==0){
                $(".input-group").css("margin-top","50px");
                $(".input-group").css("margin-right","20px");
                $("#check-btn").val("1");
            }else{
                $(".input-group").css("margin-top","10px");
                $("#check-btn").val("0");
                $(".input-group").css("margin-right","20px");
            }
        });
    });
</script>
</html>	
