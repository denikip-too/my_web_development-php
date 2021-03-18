<?php
$fruits = array("Banana", "Oranges", "Pineapples", "Apples", "Water melon");
$numbers = array(25, 45, 36, 85, 47);


$lengtharr = count($fruits);
$length = count($numbers);

echo "I Like eating ".$fruits[4];
echo "<br>";
echo "My favourite number is: ".$numbers[0];
echo "<br>";
echo count($fruits);
echo "<br>";
echo count($numbers);
echo "<br>";

echo "<br>";
echo "<br>";
//indexed array
for ($x = 0; $x< $lengtharr; $x++){
    echo $fruits[$x];
    echo "<br>";
}
echo "<br>";
echo "<br>";
for ($x = 0; $x< $lengtharr; $x += 2){
    echo $fruits[$x];
    echo "<br>";
}
echo "<br>";
echo "<br>";
$y = 0;
while ($y < $lengtharr){
    echo "<br>".$fruits[$y];
    $y++;
}
echo "<br>";
echo "<br>";
//ascending order
sort($numbers);
for ($z = 0; $z < $length;$z++){
    echo $numbers[$z];
    echo "<br>";
}
echo "<br>";
echo "<br>";
//descending order
rsort($numbers);
for ($r = 0; $r < $length;$r++){
    echo $numbers[$r];
    echo "<br>";
}
echo "<br>";
echo "<br>";
//ascending order
sort($fruits);
for ($a = 0; $a < $lengtharr;$a++){
    echo $fruits[$a];
    echo "<br>";
}
echo "<br>";
echo "<br>";
//descending order

rsort($fruits);
for ($b = 0; $b < $lengtharr;$b++){
    echo $fruits[$b];
    echo "<br>";
}

?>
