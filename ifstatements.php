<?php
//$x = 30;
//if($x < 31){
 //   echo "The no is not less than";
//}
$x = date("H");
if ($x < "30"){
    echo "Good Morning";
}
echo "<br>";
$y = 45;
if ($y < "25"){
    echo "It is a less than";
}else{
    echo "It is a greater than";
}
echo "<br>";

//if...elseif...else
$a = 22;
if ($a < "26"){
    echo "The no is not less";
}elseif ($a > "79"){
    echo "The no is not great";
}else{
    echo "The no is equal to";
}

?>
