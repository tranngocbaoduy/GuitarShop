<?php
session_start();

require_once($_SERVER['DOCUMENT_ROOT'].'/model/CategoryModel.php');

/**
 * Created by PhpStorm.
 * User: mac
 * Date: 11/17/18
 * Time: 17:44
 */
    if(isset($_GET['action']) && $_GET['action'] == "getCategoryById") {
        $idCate = $_GET['idCategory'];

        $cate = new CategoryModel();
        $listCategory = $cate->getCategoryById($idCate);

        for ($i = 0; $i <= count($listCategory->data) - 1; $i++) {
            $result[] = array(
                'id' => $listCategory->data[$i]['ID_CATEGORY'],
                'name' => $listCategory->data[$i]['NAME'],
                'note' => $listCategory->data[$i]['NOTE'],
            );
        }
        echo json_encode($result[0]);
    }


?>