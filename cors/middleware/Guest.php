<?php
namespace cors\middleware;

class Guest {


public function handle(){
    if($_SESSION["user"] ?? false){
        header("Location: /backendphp/public/");
        exit();
   }
}


}