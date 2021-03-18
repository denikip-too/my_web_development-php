<?php
$message = ["Oh hey", " You're doing great", " Keep up the good work!\n"];

$favorite_nums = [7, 201, 33, 88, 91,7,201,45,33,88];

$name = array("Mark", "Denise", "Joy","Becky");
$age = array(25,45, 21, 19);

$combine = array_combine($name, $age);
var_dump($combine);
echo "<br>";
// Write your code below:
echo implode(",", $message);
echo "<br>";
print_r($favorite_nums);
echo "<br>";
$count = array_count_values($favorite_nums);
var_dump($count);
?>