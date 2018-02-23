<?php

$router = new AltoRouter;

$router->map('GET', '/', '' , 'home');

//
$match = $router->match();

if($match){
    echo 'Home   Page';
}else{
    header($_SERVER['SERVER_PROTOCOL']. '404 Not Found');
    echo 'Page not found';
}


//var_dump($match);


