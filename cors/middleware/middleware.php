<?php
namespace cors\middleware;
use cors\middleware\Guest;
use cors\middleware\Auth;
class middleware
{  public const MAP=[
  'guest'=>Guest::class,
  'auth'=>Auth::class

];
public static function resolve($key){
    if(!$key){
        return ;
    
    }
    
    $middleware=static::MAP[$key]?? false;
    if(!$middleware){   
       throw new \Exception("No middleware for {$key}");
    }
    (new $middleware)->handle();    
    
}
}