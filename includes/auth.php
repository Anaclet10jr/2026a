<?php
    $host="localhost";
    $username="root";
    $passoword="";
    $database="student_management";

    $conn=new mysqli(
        $host,
        $username,
        $password,
        $database

    );

    if($conn->connect_error){
        die ("connection error".$conn->conect_error);
    }

    $conn->set_charset("utf8mb4");

?>