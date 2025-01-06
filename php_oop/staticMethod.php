<?php

class calculation {
    public static function add($num1,$num2){
        return $num1+$num2;
    }
    public static function subtract($num1,$num2){
        return $num1-$num2;
    }


}
echo  calculation::add(34,13);
echo "<br>";
echo  calculation::subtract(34,13);


echo "<br>";
//<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

class counter{
    public static $count=1;
    public static function increament(){
        self::$count++;
    }

}
counter::increament();
counter::increament();
echo counter::$count;



echo "<br>";
//<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
class parentClass{
    public static function message(){
        return "Hello rupom";
    }

}
class childclass extends parentClass{}
echo childclass::message();

