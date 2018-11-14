<?php

require_once('config/dbConfig.php');

class ProductModel {
    private $conn;

    function __construct() {
        $this->conn = getConnection();
    }

    function __destruct() {
        $this->conn->close();
    }

    function getProductById($idProduct) {
        $sql = "SELECT * FROM PRODUCT WHERE ID_PRODUCT = '$idProduct'";
        $result = $this->conn->query($sql);
        if ($result->num_rows >0){
            return $result->fetch_assoc();
        }else{
            echo "khong co doi tuong nao";
        }
        return false;
    }

    function getAllProduct() {
        $sql = "SELECT * FROM PRODUCT";
        $result = $this->conn->query($sql);
        $listProduct = [];
        if ($result->num_rows >0){
            while($row = $result->fetch_assoc()) {
                $listProduct[] = $row;
            }
            return $listProduct;
        }else{
            echo "khong co doi tuong nao";
        }
        return false;

    }

    function insertAccount($username,$name,$pwd,$rePwd){
//        $sql = "INSERT INTO `QLGUITAR`.`ACCOUNT` (`USERNAME`, `PASSWORD`) VALUES ('$name', '$encrypted')";
//        $result = $conn->query($sql);
//        echo $result."           dsds";
//        $sql = "SELECT *  FROM ACCOUNT";
//        $result = $conn->query($sql);
//        echo "thanh_cong";
//        if ($result->num_rows > 0) {
//            // output data of each row
//            while($row = $result->fetch_assoc()) {
//                echo " - Name: " . $row["USERNAME"] . " " . $row["PASSWORD"] . "<br>";
//            }
//        }
    }


}



?>