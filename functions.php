<?php
function webdevelopment(){
    echo "How is our today's class?";
}
function my_name(){
    echo "My name is Denis and I am ";
    return 20;
}
function sum($x, $y){
    echo "The sum is: ";
    return ($x + $y);
}
function product($a, $b){
    echo "The product is: ";
    return $a * $b;
}
function division($c, $d){
    echo "The divion is: ";
    return $c / $d;
}
webdevelopment();
echo "<br>";
$name = my_name();
echo $name." Years old.";
echo "<br>";
$add = sum(4,5);
echo $add;
echo "<br>";
$prod = product(3,4);
echo $prod;
echo "<br>";
$div = division(20, 5);
echo $div;
?>
