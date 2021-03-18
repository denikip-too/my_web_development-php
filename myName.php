<?php


class myName
{
 private $name;
 function setName($name){
     $this->name = $name;
 }
 function getName(){
     return $this->name;
 }
}
$my = new myName();
$my->setName("Denis Kiprotich");
echo "My name is ".$my->getName();
?>
<?php



