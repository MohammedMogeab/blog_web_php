<?php
namespace Http\Forms;
use cors\validationExceptions;
use cors\validator;
class LoginForm{
    protected $errors=[];
    
 

    public function __construct(public array $attributes){


           if(!validator::email($attributes['email'])){
           $this->errors["email"]="email is required";
    }
    
    
    if(!validator::string($attributes['password'])){
            $this->errors["password"]="password is required";
    }

    }
   public static function validate($attributes){

   $instance=new static($attributes);
  
 return $instance->failed()? $instance->throw(): $instance;
 
    


    // return empty($this->errors);
  


   }

   public function throw(){
 validationExceptions::throw($this->errors,$this->attributes);
   }
   public function failed(){
       return count($this->errors);
   }
   public function  errors(){
        return $this->errors;
    }

    public function error($key,$message){
     $this->errors[$key]=$message;
     return $this;
    }
}
