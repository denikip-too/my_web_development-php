<?php


class cars
{
    //properties
public $model;
public $color;
public $registration;

//methods
function set_model($model){
    $this->model = $model;
}
function get_model(){
    return $this->model;
}
function set_color($color){
    $this->color = $color;
}
function get_color(){
    return $this->color;
}
function set_registration($registration){
   $this->registration = $registration;
}
function get_registration(){
    return $this->registration;
}

}
$mercedes = new cars();
$toyota = new cars();
$mercedes->set_model("This is my first car.");
$toyota->set_model("This is my second car.");
echo $mercedes->get_model();
echo "<br>";
echo $toyota->get_model();




?>