<?php
    session_start();

    require_once($_SERVER['DOCUMENT_ROOT'].'/model/CategoryModel.php');

    if(isset($_GET['action'])){
        $action = $_GET['action'];
        if($action == "getAllCategory"){
            $cate = new CategoryModel();
            $listCategory = $cate->getAll();

            for ($i = 0; $i <= count($listCategory->data)-1; $i++) {
                $result[] = array(
                    'id' => $listCategory->data[$i]['ID_CATEGORY'],
                    'name' => $listCategory->data[$i]['NAME'],
                    'note' => $listCategory->data[$i]['NOTE'],
                );
            }
            echo json_encode($result);
        }
    }else {

        // kieerm tra dang nhap chua ??
        if (isset($_SESSION['usernameCurrent']) && isset($_SESSION['passwordCurrent']) && $_SESSION['usernameCurrent'] != '' && $_SESSION['passwordCurrent'] != '') {
            $name = strtoupper($_SESSION['usernameCurrent']);
            $pwd = $_SESSION['passwordCurrent'];
            echo " <li><a href=\"yourCart.php\"  >CART</a></li><li> <a href=\"#yourHomePage\" style=\"color:darkred\">Hello, " . $name . "</a></li> <li><a href=\"logout.php\">LOGOUT</a></li>";
        } else {
            echo "<li><a href=\"login.php\">LOGIN</a></li><li><a href=\"yourCart.php\"  >CART</a></li>";
        }

    }


?>
