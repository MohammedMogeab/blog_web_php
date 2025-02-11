<?php
use cors\validator;
use cors\App;
use cors\Database;

$db=App::resovle(Database::class);
  $currendUserId=4;
 $errors=[];
   
    // This will show you the exact value of "body"
       
      if(!validator::string($_POST["body"],1,1000)){
          $errors["body"]="body is required";
          
}
      

      if(!empty($errors)){
          //validation issue
        return  view("notes/create.view.php" ,[
            "heading"=>'Create Note',
            "errors"=>$errors
        ]);                
        
        
      }
   
      
             $db->query("INSERT INTO notes (body,user_id) VALUES (:body, :user_id)", [
           ':body' => $_POST["body"], // Named :body
           ':user_id' => 4           // Named :user_id
       ]);
       

       header("Location:/backendphp/notes");
       exit();



  //validation issu