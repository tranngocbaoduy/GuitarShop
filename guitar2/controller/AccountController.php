<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . '/model/AccountModel.php');


// method login()
if (isset($_POST['action']) && $_POST['action'] == "login") {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $checked = $_POST['remember']; //var POST Remember me
        if ($username != ' ' && $password != ' ') {
            $accountModel = new AccountModel();
            $result = $accountModel->login($username, $password);
            if ($result->status == Response::$SUCCESS) {
                $_SESSION['usernameCurrent'] = $username;
                $_SESSION['passwordCurrent'] = $password;
                echo $result->status;
                // header("Location: index.php");
//                echo $result->message . "ddsds";
            } else {
                $message = "Wrong account or password. Please check again !!!";

            }
        }
    }
}
//}

?>