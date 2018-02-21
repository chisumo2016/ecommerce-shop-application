<?php

define('BASE_PATH', realpath(__DIR__.'/../../'));

//Require autoload

require_once  __DIR__.'/../../vendor/autoload.php';

$dotEnv = new \Dotenv\Dotenv(BASE_PATH);

$dotEnv->load();