<?php

abstract class animal{
    abstract public function makeSound();   // here can not make  a body for  abstract function

   public function eat (){
        echo " eats ";
    }

}
class dog extends animal{
    function makeSound(){
        echo "ghew ghew";
    }
}
class cat extends animal{
    function makeSound(){
        echo "mew mew";
    }
}                                                // here can not make for an object for   abstract function
$dog= new dog();
$dog->makeSound();
$dog->eat();

$cat =new cat();
$cat->makeSound();
$cat->eat();





?>