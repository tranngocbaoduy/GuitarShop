<?php
session_start();
require_once "model/ProductModel.php";

    // method getProductByNumber()
    if(isset($_GET['action']) && isset($_GET['quantity']) && $_GET['action'] == "getProductByQuantity" ){
        $quantityGet = $_GET['quantity'] ;

        $result = array();
        $productModel = new ProductModel();
        $list = $productModel->getAllProduct();
        for($i = 1;$i<=$quantityGet;$i++){
            $result[] = array(
                'id' => $list[$i]['ID_PRODUCT'],
                'name' => $list[$i]['NAME'],
                'price' => $list[$i]['PRICE'],
                'image' => $list[$i]['IMG'],
                'des' => $list[$i]['DESCRIPTION'],
                'id_cate' => $list[$i]['ID_CATEGORY']
            );
        }
        echo json_encode($result);
    }else if(($_GET['action']) && $_GET['action'] == "getAllProduct" ){

//        foreach ($list as $key => $item){
//            $result[] = array(
//                'id' => $item['ID'],
//                'name' => $item['NAME'],
//                'price' => $item['PRICE'],
//                'image' => $item['IMG'],
//                'des' => $item['DESCRIPTION'],
//                'id_cate' => $item['ID_CATEGORY']
//            );
//        }

    }
//
?>