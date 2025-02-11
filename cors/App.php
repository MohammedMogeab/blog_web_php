<?php
namespace cors;
class App{
     protected static $containers;
    public static function setcontainer($container){
        static::$containers=$container;
        
    } 
    public static function container(){
        return static::$containers;
    }
    public static function resovle($key){
        return static::$containers->resolve($key);
    }
    public static function bind($key,$resolver){
        return static::$containers->bind($key,$resolver);
    }   






}   