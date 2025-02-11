<?php
use cors\Response;
/**
 * Returns true if the current URL matches the given path, false otherwise.
 * @param string $path
 * @return boolean
 */

function urlIs($path){
    return $_SERVER["REQUEST_URI"] === $path;
}

function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();

}

function base_path($path = '')
{
    return BASE_PATH.$path;
}

function abort($code = 404)
{
    http_response_code($code);

    require base_path("view/{$code}.php");

    die();
}
function redirect($path){
    header("Location: {$path}");
    exit();
}


function view($path,$attruites = []){
  extract($attruites);
     require base_path("view/$path");
}

function authorize($condition, $status = Response::FORBIDDEN)
{
    if (! $condition) {
        abort($status);
    }

    return true;
}
function old($key, $default = ''){
return cors\session::get('old')[$key] ?? $default;
}

?>