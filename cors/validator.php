<?php
 namespace cors;
class validator{

 
public static function  string($value,$min=1,$max=INF)
{

$value=trim($value);
return strlen($value) >=$min && strlen($value)<=$max;
} 

public static function email(string $value):bool{   
  //validate email format
  return filter_var($value,FILTER_VALIDATE_EMAIL);
}

}