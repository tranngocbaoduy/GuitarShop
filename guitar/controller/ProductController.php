<?php
    session_start();

    require_once($_SERVER['DOCUMENT_ROOT'].'/model/ProductModel.php');

    // method getProductByNumber()
    if(isset($_GET['action']) && isset($_GET['quantity']) && $_GET['action'] == "getProductByQuantity" ) {
        $quantityGet = $_GET['quantity'];

        $result = array();
        $productModel = new ProductModel();
        $list = $productModel->getAll();

        for ($i = 1; $i <= $quantityGet; $i++) {
            $result[] = array(
                'id' => $list->data[$i]['ID_PRODUCT'],
                'name' => $list->data[$i]['NAME'],
                'price' => $list->data[$i]['PRICE'],
                'image' => $list->data[$i]['IMG'],
                'des' => $list->data[$i]['DESCRIPTION'],
                'id_cate' => $list->data[$i]['ID_CATEGORY']
            );
        }
        echo json_encode($result) ;
    } else if(($_GET['action']) && $_GET['action'] == "getProductByCategory" ){
        $idCate = $_GET['idCategory'];

        $result = array();
        $productModel = new ProductModel();
        $list = $productModel->getProductByCategory($idCate);

        for ($i = 0; $i <= count($list->data)-1; $i++) {
            $result[] = array(
                'id' => $list->data[$i]['ID_PRODUCT'],
                'name' => $list->data[$i]['NAME'],
                'price' => $list->data[$i]['PRICE'],
                'image' => $list->data[$i]['IMG'],
                'des' => $list->data[$i]['DESCRIPTION'],
                'id_cate' => $list->data[$i]['ID_CATEGORY']
            );
        }
        echo json_encode($result) ;

    }

?>