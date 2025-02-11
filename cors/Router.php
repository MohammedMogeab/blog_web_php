<?php
namespace cors;
use cors\middleware\Guest;
use cors\middleware\Auth;
use cors\middleware\middleware;

class Router{
    protected $routes = [];   
    public function add($uri,$controller,$method){
    $this->routes[] = [
        'uri' => $uri,
        'controller' => $controller,
        'method' => $method,
        'middleware'=>null
    ];
    return $this;
}   
   public  function post($uri,$controller){    
 return $this->add($uri,$controller,"POST");
   
   }
   
    public  function get($uri,$controller){
     return $this->add($uri,$controller,"GET");
    }
     
    public function only($key){
      $this->routes[array_key_last($this->routes)]["middleware"]=$key;  
    return $this;
    }      
   
    public  function delete($uri,$controller){
      return $this->add($uri,$controller,"DELETE");
   
    }
   
   
    public  function patch($uri,$controller){
        return $this->add($uri,$controller,"PATCH");
     
    }
   
    public  function put($uri,$controller){
        return $this->add($uri,$controller,"PUT");
        
    }
    public function route($uri,$method){
             
    foreach($this->routes as $route){
        if($route["uri"]==$uri && $route["method"]==strtoupper($method)){
           middleware::resolve($route['middleware']);

            
            //apply middleware 
            // if($route['middleware']=="guest"){
            //  (new Guest)->handle();
            // }
            // if($route['middleware']=='auth'){
            //     (new Auth)->handle();
            //  }
           
            return require base_path('Http/controllers/'.  $route['controller']);
       
        }
    }
    // echo $uri;
    // echo "<br>";
    // echo $method;
    $this->abort(404);

}

protected function abort($code){
    http_response_code($code);
    require base_path("view/{$code}.php");
    die();
}
public function previousUrl(){
    return $_SERVER['HTTP_REFERER'];
}


  


}
// $uri = parse_url($_SERVER["REQUEST_URI"])["path"];
// $routes = require base_path("routes.php");

// echo $uri;
// if($uri=='/backendphp/'){

// require "controllers/index.php";
// }
// else if($uri =='/backendphp/about'){
 
//     require "controllers/index.php";
// }   
// else if($uri =='/backendphp/contact'){
//     require "controllers/contact.php";
// }
// else{
    
// function abort($code){
//     http_response_code($code);
//     require base_path("view/{$code}.php");
//     die();
// }


// function RouteToController($uri,$routes){
//     if(array_key_exists($uri,$routes)){
//     require base_path($routes[$uri]);
// }
// else{
//   echo $uri;
//     abort(404);
// }

// }

// RouteToController($uri,$routes);









