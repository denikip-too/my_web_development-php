<?php


class rectangle
{
protected $length, $width;
function __construct($length, $width)
{
    $this->length = $length;
    $this->width = $width;
}
function area(){
    return $this->length * $this->width;
}
function perimeter(){
    return 2 * ($this->length + $this->width);
}
}
$rec = new rectangle(7,8);
$recc = new rectangle(9,10);
$area1 = $rec->area();
$peri1 = $rec->perimeter();
$area2 = $recc->area();
$peri2 = $recc->perimeter();
echo "The area of first rectangle is $area1";
echo "<br>";
echo "The perimeter of first rectangle is $peri1";
echo "<br>";
echo "The area of second rectangle is $area2";
echo "<br>";
echo "The perimeter of second rectangle is $peri2";
?>