<?php

require_once('config/dbConfig.php');

class AccountModel {
    private $conn;

    function __construct() {
        $this->conn = getConnection();
    }

    function __destruct() {
        $this->conn->close();
    }

    function login($username, $password) {
        $encrypted = md5($password);
        $sql = "SELECT * FROM ACCOUNT WHERE USERNAME='$username' && PASSWORD='$encrypted'";
        $result = $this->conn->query($sql);
        $row = $result->fetch_assoc();
        if ($result->num_rows == 1 && $row['USERNAME'] == $username && $row['PASSWORD'] ==  $encrypted){
            return true;
        }
        return false;

    }

    function getAllAccount() {
        $sql = "SELECT * FROM ACCOUNT";
        $result = $this->conn->query($sql);
        $listAccount = [];
        if ($result->num_rows >0){
            while($row = $result->fetch_assoc()) {
                $listAccount[] = $row;
            }
            print_r($listAccount);
            return $listAccount;
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