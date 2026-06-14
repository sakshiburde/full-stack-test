<?php

$host = "127.0.0.1";
$user = "phpuser";
$password = "PhpUser@123";
$database = "wpoets_test";

$conn = mysqli_connect($host,$user,$password,$database);

if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}

?>