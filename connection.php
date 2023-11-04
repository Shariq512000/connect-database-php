<?php

$userName = "root";
$password = "";
$server = "localhost";
$db = "practice";

$con = mysqli_connect($server, $userName, $password, $db);

if($con){
    echo "Database Connected";
}else{
    echo "Failed to connect";
}


?>