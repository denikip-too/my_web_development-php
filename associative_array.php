<?php
$grades = array("Amos" => "A", "Ann" => "B", "Laura" => "A", "Freya" => "A", "Becky" => "B");
$length_of_grades = count($grades);
print_r($grades);
echo "<br>";
echo "<br>";
foreach ($grades as $key => $value){
    echo $key." scored ".$value." grade in math.";
    echo "<br>";
}
echo "<br>";
echo "<br>";
$age = array("John" => "25", "Joan" => "40", "Yvonne" => "35", "Brian" => "34", "Thyline" => "27");
echo "The age of Thyline is ".$age["Thyline"];
echo "<br>";
echo "<br>";
foreach ($age as $name => $agee){
    echo $name." is ".$agee." years old.";
    echo "<br>";
}
echo "<br>";
echo "<br>";
//ascending order according to value
echo "Ascending order according to value";
echo "<br>";

asort($grades);
foreach ($grades as $key => $grd){
    echo $key." scored ".$grd;
    echo "<br>";
}
echo "<br>";
echo "<br>";
//ascending order according to keys
echo "Ascending order according to keys";
echo "<br>";
ksort($grades);
foreach ($grades as $nme => $grde){
    echo $nme." scored ".$grde;
    echo "<br>";
}
echo "<br>";
echo "<br>";
//descending order according to value
echo "Descending order according to value";
echo "<br>";
$length_of_grades = count($grades);
arsort($grades);
foreach ($grades as $keys => $grds){
    echo $keys." scored ".$grds;
    echo "<br>";
}
echo "<br>";
echo "<br>";
//descending order according to keys
echo "Descending order according to keys";
echo "<br>";
krsort($grades);
foreach ($grades as $nmes => $grdes){
    echo $nmes." scored ".$grdes;
    echo "<br>";
}

?>
