<?php

    //  for access a constant from outside the class
    class Goodbye {
        const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
      }
      
      echo Goodbye::LEAVING_MESSAGE;



 //  for access a constant from outside the class

 class Goodbye {
    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
    public function byebye() {
      echo self::LEAVING_MESSAGE;
    }
  }
  
  $goodbye = new Goodbye();
  $goodbye->byebye();

?>