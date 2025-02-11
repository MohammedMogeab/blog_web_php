<?php

use cors\Database;
use cors\App;

$db=App::resovle(Database::class);
 $notes=$db->query("SELECT * FROM notes where user_id =4")->get();


//  dd($notes);
view("notes/index.view.php" ,[
    "heading"=>'My Notes',
    "notes"=>$notes
]);                

?>  