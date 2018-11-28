<?php
    session_start();
    if(isset($_SESSION['usernameCurrent']) && isset($_SESSION['passwordCurrent'])){
        unset($_SESSION['usernameCurrent']);
        unset($_SESSION['passwordCurrent']);
        header("Location: index.php");
    }
?>