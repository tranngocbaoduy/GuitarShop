<?php
session_start();
require_once "model/AccountModel.php";



    // method login()
    if(isset($_POST['action']) && $_POST['action'] == "login"){
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $checked = $_POST['remember']; //var POST Remember me

            if ($username != ' ' && $password != ' ') {
                $accountModel = new AccountModel();
                $result = $accountModel->login($username, $password);
                if ($result == true) {
                    $_SESSION['usernameCurrent'] = $username;
                    $_SESSION['passwordCurrent'] = $password;
                    // header("Location: index.php");
                    echo "Login";
                } else {
                    $message = "Wrong account or password. Please check again !!!";
                }
            }
        }
    }

?>