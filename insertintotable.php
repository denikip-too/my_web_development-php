
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

//inserting data on a table


$sql = "INSERT INTO `regester2`( `Firstname`, `Secondname`, `Email`, `Age` 
) VALUES ('John','Kariuki','johnkariuki@gmail.com',
'25')";
$sql = "INSERT INTO `regester2`( `Firstname`, `Secondname`, `Email`, `Age`
) VALUES ('Denis','Kiprotich','kiprotichdenis95@gmail.com',
'21')";
$sql = "INSERT INTO `regester2`( `Firstname`, `Secondname`, `Email`, `Age`
) VALUES ('Denis','Kiprotich','kiprotichdenis95@gmail.com',
'21')";
$sql = "INSERT INTO `regester2`( `Firstname`, `Secondname`, `Email`, `Age`
) VALUES ('Joy','chebet','joychebet@gmail.com',
'28')";
$sql = "INSERT INTO `regester2`( `Firstname`, `Secondname`, `Email`, `Age`
) VALUES ('Elly','James','ellyjames@gmail.com',
'21')";
$sql = "INSERT INTO `regester2`( `Firstname`, `Secondname`, `Email`, `Age`
) VALUES ('Joy','Muthoni','kiprotichdenis95@gmail.com',
'21')";

if($connection->multi_query($sql)=== TRUE){
    echo "Data inserted successfully";
}else{
    echo "data not inserted".$connection->error;
}
$connection->close();