<?php
use cors\App;
use cors\Database;

$db=App::resovle(Database::class);
  $currendUserId=4;

//  $config=require base_path( "config.php");

//  $db=new Database($config["database"],"root","mohammedmogeab");

 $note=$db->query("SELECT * FROM notes where Id=:id ",[
    ":id"=>$_POST["id"]
    
    ])->findORFail();

  $db->authorize($note["user_id"] ==$currendUserId);
  $db->query("DELETE FROM notes where Id=:id ",[
    ":id"=>$_POST["id"]
  ]);

  header("Location:/backendphp/notes");
  exit();

