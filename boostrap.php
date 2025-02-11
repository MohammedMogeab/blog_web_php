<?php
use cors\App;
use cors\Database;
use cors\container;

$conatiner=new container();

$conatiner->bind('cors\Database',function(){
    $config=require base_path( "config.php");
    return new Database($config["database"],"root","mohammedmogeab");
});


App::setcontainer($conatiner);
