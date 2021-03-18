<?php


class pet
{
function type(){
    return "pet";
}
}
class dog extends pet{
    function type()
    {
        return "dog";
    }
    function info(){
        echo "This ".parent::type()." is of type ".$this->type();
    }
}
class cat extends pet{
    function type()
    {
        return "cat";
    }
    function getInfo(){
        echo "This ".parent::type()." is of type ".$this->type();
    }
}
$pets = new dog();
$pets->info();
$ppets = new cat();
$ppets->getInfo();