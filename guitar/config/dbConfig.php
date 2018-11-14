<?php


    function getConnection(){
        $servername = "localhost:3306/";
        $username = "root";
        $password = "2608root";
        $db = "QLGUITAR";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $db);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
?>