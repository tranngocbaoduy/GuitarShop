<?php
    session_start();
    // kieerm tra dang nhap chua ??
    if(isset($_SESSION['usernameCurrent']) && isset($_SESSION['passwordCurrent']) && $_SESSION['usernameCurrent']!=''&& $_SESSION['passwordCurrent'] !='' ){
        $name = strtoupper($_SESSION['usernameCurrent']);
        $pwd= $_SESSION['passwordCurrent'];
        echo " <li><a href=\"yourCart.php\"  >CART</a></li><li> <a href=\"#yourHomePage\" style=\"color:darkred\">Hello, ".$name."</a></li> <li><a href=\"logout.php\">LOGOUT</a></li>";
    }else{
        echo "<li><a href=\"login.php\">LOGIN</a></li><li><a href=\"yourCart.php\"  >CART</a></li>";
    }



?>
