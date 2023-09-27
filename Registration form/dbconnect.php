<?php
$host = "localhost";
$username = "root";
$password = "";
$DBname = "profile";

$conn = new mysqli($host, $username, $password, $DBname);

if($conn->connect_error){
    die("Connection error".$conn);
}

?>