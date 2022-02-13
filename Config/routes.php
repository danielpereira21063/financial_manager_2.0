<?php

$controller = 'Home';
$method = 'Index';

if ( isset( $_GET[ 'a' ] )  && !empty($_GET["a"])) {
    $url = explode('/', $_GET["a"]);
    $controller = $url[0];

    if(isset($url[1])) {
        $method = $url[1];
    }

    $controllerPath = "APP . '/Controllers/'. $controller . 'Controller.php'";
    
    if(isset($controllerPath)) {
        $controller = $_GET['a'];
        echo $controller;
    }
}

$controllerPath = APP . '/Controllers/'. $controller . 'Controller.php';
require_once($controllerPath);