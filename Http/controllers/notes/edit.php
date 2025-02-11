<?php
use cors\App;
use cors\Database;

$db=App::resovle(Database::class);
  $currendUserId=4;
 
    
 
   
   $note=$db->query("SELECT * FROM notes where Id=:id ",[
      ":id"=>$_GET["id"]
      
      ])->findORFail();
  
 
    // dd($note);


view("notes/edit.view.php" ,[
    "heading"=>'edit Note',
    "errors"=>[],
    "note"=>$note
]);                








// <form method="post">
//           <input type="hidden" name="_method" value="DELETE">
//           <input type="hidden" name="id" value="<?=$note['Id']?>">
<!-- //           <button class="text-red-500 hover:underline" type="submit" >Delete</button>


//          </form> -->