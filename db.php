<?php

$serverName="localhost";
$userName="root";       
$password="";
$dbName="Ass_3";


$conn=mysqli_connect($serverName,$userName,$password,$dbName);


if (mysqli_connect_errno()){

    echo "Failed to connect";
    exit();
}

echo"Connection Success";

?>