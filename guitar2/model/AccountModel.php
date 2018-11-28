<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/config/DataBaseConfig.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/entities/Account.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/entities/Response.php');


class AccountModel{

    public $db;

    public function __construct()
    {
        $this->db = DataBaseConfig::getInstance();
    }

    function login($username, $password) {
        $encrypted = md5($password);
        $response = new Response();
        try{
            $sql = "SELECT * FROM ACCOUNT WHERE USERNAME='$username' && PASSWORD='$encrypted'";
            $param = Array();

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

    public function getAll(){
        $response = new Response();
        try{
            $sql = "select * from ACCOUNT";
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


    public function getAccountById($id){

        $response = new Response();
        try{
            $sql = "select * from Category where id = ?";
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