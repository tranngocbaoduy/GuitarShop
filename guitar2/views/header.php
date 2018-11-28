<?php
    session_start();
?>
<script src="assets/js/header.js"> </script>
<input type="hidden" id="check-btn" style="display:none" value="0">
<nav class="navbar navbar-default ">
    <div class="container-fluid">
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
                <li><a id="home"href="index.php">HOME</a></li>
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
                <li><a href="contact.php">CONTACT</a></li>


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
    </div>
</nav>
