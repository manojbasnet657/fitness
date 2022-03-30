<?php
$server = "localhost";
    $username="root";
    $password = "";
    $dbname = "manojdb";


    $conn = mysqli_connect($server,$username,$password,$dbname);

    if($conn){
        echo"connected";
    }else{
        echo"not connected";
    }
?>