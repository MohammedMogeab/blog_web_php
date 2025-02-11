<?php
use cors\Authentactor;
$aut=new Authentactor();
$aut->logout();
header('Location: /backendphp/public/');
exit;   
