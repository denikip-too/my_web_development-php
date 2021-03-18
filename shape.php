<?php


class shape
{
    protected $length, $width;

function  Length($length){
    $this->length = $length;
}
function Width($width){
$this->width = $width;
}

}
class rectangle extends shape {
    function area(){
        return $this->length * $this->width;
    }
    function peri(){
        return 2 * ($this->length + $this->width);
    }
}
class square extends shape{
    function area(){
        return $this->length * $this->length;
    }
    function perimeter(){
        return 4 * ($this->length);
    }
}


$rec = new rectangle();
$rec->Length(6);
$rec->Width(5);
$area = $rec->area();
$peri = $rec->peri();
$sqr = new square();
$sqr->Length(7);
$area1 = $sqr->area();
$peri1 = $sqr->perimeter();
echo "Area of rectangle is $area";
echo "<br>";
echo "Perimeter of rectangle is $peri";
echo "<br>";
echo "Area of square is $area1";
echo "<br>";
echo "Perimeter of square is $peri1";



?>