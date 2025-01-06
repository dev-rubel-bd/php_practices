<?php
class static_property{
    public static $property=0;
    public static function my_property(){
        self::$property++;
    }
}
static_property:: my_property();
static_property:: my_property();
echo static_property::$property ;

?>