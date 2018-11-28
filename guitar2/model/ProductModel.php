<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/config/DataBaseConfig.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/entities/Product.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/entities/Response.php');


class ProductModel{

    public $db;

    public function __construct()
    {
        $this->db = DataBaseConfig::getInstance();
    }

    public function getAll(){
        $response = new Response();
        try{
            $sql = "select * from PRODUCT";
            $param = array();

            $result = $this->db->get($sql, $param);

            if ($result == Response::$FAILED){
                $response->status = Response::$FAILED;
                $response->message = "Truy vấn thông tin không thành công";
            }else{
                $response->status = Response::$SUCCESS;
                $response->message = "Truy vấn thành công";
                $response->data = $result;
            }
        }catch (Exception $e){

            $response->status = Response::$ERROR;
            $response->message = $e->getMessage();
        }

        return $response;
    }

    public function getProductByCategory($id){

        $response = new Response();
        try{
            $sql = "select * from product where ID_CATEGORY = ?";
            $param = array($id);

            $result = $this->db->get($sql, $param);

            if ($result == Response::$FAILED){
                $response->status = Response::$FAILED;
                $response->message = "Truy vấn thông tin không thành công";
            }else{
                $response->status = Response::$SUCCESS;
                $response->message = "Truy vấn thành công";
                $response->data = $result;
            }
        }catch (Exception $e){

            $response->status = Response::$ERROR;
            $response->message = $e->getMessage();
        }

        return $response;
    }

    public function getProductById($id){

        $response = new Response();
        try{
            $sql = "select * from PRODUCT where ID_PRODUCT = ?";
            $param = array($id);

            $result = $this->db->get($sql, $param);

            if ($result == Response::$FAILED){
                $response->status = Response::$FAILED;
                $response->message = "Truy vấn thông tin không thành công";
            }else{
                $response->status = Response::$SUCCESS;
                $response->message = "Truy vấn thành công";
                $response->data = $result;
            }
        }catch (Exception $e){

            $response->status = Response::$ERROR;
            $response->message = $e->getMessage();
        }

        return $response;
    }

}
?>