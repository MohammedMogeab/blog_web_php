<?php
use cors\validator;
use cors\App;
use cors\Database;

$db=App::resovle(Database::class);
  $currendUserId=4;
 
    
 
   
   $note=$db->query("SELECT * FROM notes where Id=:id ",[
      ":id"=> $_POST["id"]
      
      ])->findORFail();
   

      authorize($note["user_id"] ==$currendUserId);


      $error=[];    

      if(!validator::string($_POST["body"],1,1000)){    
          $error["body"]="body is required";
      } 

      if(count($error)){
            return view("notes/edit.view.php" ,[
                "heading"=>'edit Note',
                "errors"=>$error,
                "note"=>$note
            ]);
      }

      $db->query("UPDATE notes SET body=:body where Id=:id ",[
        ":body"=>$_POST["body"],
        ":id"=>$_POST["id"] 
      ]);

      header("Location:/backendphp/notes");
      exit();

