<?php


class my_name
{
    public static $name = "Denis Kiprotich";
    public static function mname($names){
        return $names;
    }
}
$my = new my_name();
$myname = my_name::$name;
echo "My name is ".my_name::mname($myname)." Too";
?>