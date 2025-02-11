<?php
use cors\Router;
use cors\Authentactor;
use cors\session;
use cors\validationExceptions;
session_start();
define('BASE_PATH', __DIR__ . '/../');
require BASE_PATH . 'cors/function.php';

spl_autoload_register(function ($class) {

  $class = str_replace("\\", "/", $class);

  require base_path("{$class}.php");


});
require base_path('boostrap.php');




// require base_path('cors/router.php');
// new \cors\Router();
// Example: Call a function from one of the included files
// some_function();
$router = new Router();
$routes = require base_path("routes.php");
$uri = parse_url($_SERVER["REQUEST_URI"])["path"];
$methoed = $_POST["_method"] ?? $_SERVER["REQUEST_METHOD"];


try {
  $router->route($uri, $methoed);
} catch (validationExceptions $excepation) {
 
  session::flash("errors", $excepation->errors);
  session::flash('old', $excepation->old);
return redirect($router->previousUrl());

}


session::unflash();






// const BASE_URL=__DIR__.'/../';

//  require BASE_URL."function.php ";
// require  BASE_URL."router.php";
// require BASE_URL. "Response.php";
// require  BASE_URL."Database.php";

// require base_path('function.php');
// require base_path('Database.php');
// require  base_path('Response.php');
// require base_path('router.php');


// $config=require "config.php";
// $db=new Database($config["database"],"root","mohammedmogeab");
// $id=$_GET["id"];
// $query="SELECT * FROM courses where course_id =? ";




// $courses=$db->query($query,[$id])->fetch();
// dd($courses);


?>