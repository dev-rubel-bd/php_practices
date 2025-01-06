<?php
interface animal{
    public function makeSound();
    public function eat();
}
class cow implements animal{
    function makeSound(){
        echo "make sound hamba hamba";
    }
    function eat (){
        echo " eat grass";

    }
}

class hen implements animal{
    function makeSound(){
        echo "make kok kok";
    }
    function eat (){
        echo " eat everything";
    }
}

 $cow= new cow();
 $cow->makeSound();
 $cow->eat();

 echo "<br>";
 $hen= new hen();
 $hen->makeSound();
 $hen->eat();




 echo "<br>";
//<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//





?>