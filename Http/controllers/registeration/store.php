<?php

use cors\Authentactor;
use cors\validator;
use cors\App;
use cors\Database;
// // 
// ob_start();
$email=$_POST["email"];
$password=$_POST["password"];
$db=App::resovle(Database::class);

// //vlaidate input
$errors=[];

if(!validator::email($email)){
        $errors["email"]="email is required";
}


if(!validator::string($password,7,255)){
        $errors["password"]="password is required";
}
 
if(! empty($errors)){    



    view("registeration/create.view.php" ,[
        "errors"=>$errors            
    ]);            
    
}




$user=$db->query("select * from users where email=:email", [
    'email'=>$email
])->find();


if($user){
    // will redirect to login page
     
    header("Location:/backendphp/public/");
    exit();
}
else{
    $db->query("INSERT INTO users (email,password) VALUES (:email, :password)", [
        ':email' => $email, // Named :email
        ':password' => password_hash($password,PASSWORD_BCRYPT)// Named :password
    ]);
//     //mark the user have logined in 
//     // $_SESSION["login_in"]=true;

(new Authentactor())->login($user);
    header("Location:/backendphp/public");
    exit();
}    

// dd($_POST);


//check if  the account already exsit
  // if yes  redirect login page

