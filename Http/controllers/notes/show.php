<?php
use cors\App;
use cors\Database;

$db=App::resovle(Database::class);
  $currendUserId=4;
 
    
 
   
   $note=$db->query("SELECT * FROM notes where Id=:id ",[
      ":id"=>$_GET["id"]
      
      ])->findORFail();
  
 
    // dd($note);
view("notes/show.view.php" ,[
  "heading"=>'Note',
  "note"=>$note
]);                

