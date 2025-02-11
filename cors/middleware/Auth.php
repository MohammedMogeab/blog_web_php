<?php
namespace cors\middleware;

class Auth{
    public function handle(){
        if(! $_SESSION["user"] ?? false){
            header("Location: /backendphp/public/");
            exit();
       }
    }
}