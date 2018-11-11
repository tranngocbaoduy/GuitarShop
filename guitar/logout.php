<?php
    session_start();
    if(isset($_SESSION['emailCurrent']) && isset($_SESSION['pwdCurrent'])){
        unset($_SESSION['emailCurrent']);
        unset($_SESSION['pwdCurrent']);
        header("Location: index.php");
    }
?>