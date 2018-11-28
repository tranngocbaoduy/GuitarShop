<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/config/DataBaseConfig.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/entities/Product.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/entities/Response.php');


class TopProductModel{

    public $db;

    public function __construct()
    {
        $this->db = DataBaseConfig::getInstance();
    }

    public function getAllTopProduct(){
        $response = new Response();
        try{
            $sql = "select * from TOP_PRODUCT";
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

    public function getTopProductByCategory($id){

        $response = new Response();
        try{
            $sql = "select * from TOP_PRODUCT where ID_CATEGORY = ?";
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

    public function getTopProductById($id){

        $response = new Response();
        try{
            $sql = "select * from TOP_PRODUCT where id = ?";
            $param = array($id);

            $result = $this->db->get($sql, $param);

            if ($result == Response::$FAILED){
                $response->status = Response::$FAILED;
                $response->message = "Truy vấn thông tin không thành công";
            }else{
                $response->status = Response::$SUCCESS;
                $response->message = "Truy vấn thành công";
                $response->data = $result[0];
            }
        }catch (Exception $e){

            $response->status = Response::$ERROR;
            $response->message = $e->getMessage();
        }

        return $response;
    }

}
?>