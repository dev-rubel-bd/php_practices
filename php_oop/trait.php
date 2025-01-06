<?php

// trait logger {
//     public function log($message){
//         echo "log:$message";
//     }
// }
// class user{
//     use logger;
//     public function creatUser(){
//         $this->log("hello  everyone");
//     }
// }

// $user= new user ();
// $user->creatUser();

//<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>//


trait loggers{
    public function log($message){
        echo "log:$message";
    }
}
trait validator{
    public function valid($data){
       echo "validating:$data";
    }
}
class users{
    use loggers,validator;

    public function creatUser($data){
 
        $this->validate($data);
        $this->log("hello rupom");
        
    }
}
$user= new users();
$user->creatUser;


?>