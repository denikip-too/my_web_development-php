<?php
$server_name = "localhost";
$user_name = "root";
$password = "";

//creating connection

$connection = new mysqli($server_name, $user_name, $password);

//checking database connectivity

if($connection->connect_error){
    die("Not connected".$connection->connect_error);
}echo "Successfully connected";



?>
