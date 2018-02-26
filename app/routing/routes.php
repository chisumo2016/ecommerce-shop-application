<?php

$router = new AltoRouter;

$router->map('GET', '/', '' , 'home');

//
$match = $router->match();

if($match){

    require_once __DIR__ . '/../controllers/BaseController.php';
    require_once __DIR__ . '/../controllers/indexController.php' ;


    $index = new App\Controllers\indexController();
    $index->show();
    //echo 'Home   Page';
}else{
    header($_SERVER['SERVER_PROTOCOL']. '404 Not Found');
    echo 'Page not found';
}


//var_dump($match);


