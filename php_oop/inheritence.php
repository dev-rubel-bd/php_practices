<?php

class car{
    public $name, $model;
    function __construct($name,$model){
        $this->name=$name;
        $this->model=$model;
    }
    function print(){
        echo "This car name is".$this->name ." and model ".$this->model;

    }
}
class car_info extends car{
    public $color;
    function __construct($color){
        $this->color=$color;
    }
    function print(){
        echo "This car name is ".$this->name ." and model ".$this->model." and color ". $this->color;
    }
}
$bmw=new car_info("bmw","i5","black");

$bmw->print();

echo "<br>";

// ......................................................................//

class Animal{                   // create a parent class

    public $name;
    function __construct($name){            // create a contruct funtion
        $this->name=$name;
    }
    function speak(){                           // create a methode
        return $this->name ." make a sound .";
    }
}

class dog extends Animal{                       /// create a child class
    function speak(){
        return $this->name ." barks.";
    }
}
$animal1=new Animal("GenericAnimal");    // create an object for parent class
$dog= new dog("buddy");                 // create an object for child class.

echo $animal1->speak(); 
echo "<br>";
echo $dog->speak();


Echo "<br>";
// ....................................................................................................//

class birds {
    public $name,$color;
   public function __construct($name,$color){
        $this->name=$name;
        $this->color=$color;

    }
   public function info(){
        return "This ".$this->color ." colour bird name is ".$this->name;
    }

}
class food extends birds{
    public $food;
    public function __construct($name,$color,$food){
        parent::__construct($name,$color);
        $this->food=$food;
        
    }
   public  function info(){
        return parent::info()." and its eat " .$this->food;
    }
}
// $bird1= new birds ("dove","brown" );
$food= new food ("dove","brown","seeds");

echo $food->info();

echo "<br>";
// ''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''//

class fruits{
    public $name,$color;
   public function __construct($name,$color){
        $this->name=$name;
        $this->color=$color;
    }
    public function fruit_details(){
        return "This fruits name is ".$this->name. " . its color is ".$this->color;
    }

}
class fruit extends fruits{
    public $price;
    public function __construct($name,$color,$price){
        parent::__construct($name,$color);
        $this->price=$price;
    }
    public function fruit_details(){
        return parent::fruit_details()." this fruits price is " .$this->price." Tk .";
    }
}
$fruits1= new fruit("Apple","green",220);
$fruits2= new fruit("Banana","yelow",40);

echo $fruits1->fruit_details();
echo "<br>";
echo $fruits2->fruit_details();


?>