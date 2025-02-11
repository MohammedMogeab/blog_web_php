<?php
// return  [
//     "/backendphp/public/" => "controllers/index.php",
//     "/backendphp/about" => "controllers/about.php",
//     "/backendphp/contact" => "controllers/contact.php",
//     "/backendphp/notes/create" => "controllers/notes/create.php",
//         "/backendphp/notes" => "controllers/notes/index.php",
//         "/backendphp/note/" => "controllers/notes/show.php"

// ];


$router->get('/backendphp/public/','index.php');
$router->get('/backendphp/about','about.php');
$router->get('/backendphp/contact','contact.php');
$router->get('/backendphp/notes/create','notes/create.php');
$router->get('/backendphp/notes','notes/index.php')->only('auth');
$router->get('/backendphp/note/','notes/show.php');
$router->get('/backendphp/note/edit','notes/edit.php');
$router->delete('/backendphp/note/','notes/destory.php');
$router->post('/backendphp/notes','notes/store.php');
$router->patch('/backendphp/note/','notes/update.php');

$router->get('/backendphp/register','registeration/create.php')->only('guest');
$router->post('/backendphp/register','registeration/store.php')->only('guest');


$router->get('/backendphp/login','sessions/create.php')->only('guest');
$router->post('/backendphp/sessions','sessions/store.php')->only('guest');
$router->delete('/backendphp/sessions','sessions/destory.php')->only('auth');
