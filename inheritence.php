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

class Animal{

    public $name;
    function __construct($name){
        $this->name=$name;
    }
    function speak(){
        return $this->name ." make a sound .";
    }
}

class dog extends Animal{
    function speak(){
        return $this->name ." barks.";
    }
}
$animal1=new Animal("GenericAnimal");
$dog= new dog("buddy");

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





?>