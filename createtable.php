<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$database = "webdev_db";

//creating connection

$connection = new mysqli($server_name, $user_name, $password, $database);

//checking database connectivity

if($connection->connect_error){
    die("Not connected".$connection->connect_error);
}

//creating table

$sql = "CREATE TABLE Regester2(id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Firstname TEXT(10) NOT NULL, Secondname TEXT(10) NOT NULL, Email VARCHAR(40), 
Age INT(4), Registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP )";


if($connection->query($sql)=== TRUE){
    echo "Table successfully created";
}else{
    echo "Table not created".$connection->error;
}
$connection->close();



?>
