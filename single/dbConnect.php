<?php

$serverName="localhost";
$userName="root";       
$password="";
$dbName="assignment_3";


$conn=mysqli_connect($serverName,$userName,$password,$dbName);


if (mysqli_connect_errno()){

    echo "Failed to connect";
    exit();
}

//echo"Connection Success";







//<?php

//$serverName="sql109.ezyro.com";
//$userName="ezyro_36042956";       
//$password="c433ee59de";
//$dbName="ezyro_36042956_assignment_3";


//$conn=mysqli_connect($serverName,$userName,$password,$dbName);


//if (mysqli_connect_errno()){

    //echo "Failed to connect";
    //exit();
//}

//echo"Connection Success";

