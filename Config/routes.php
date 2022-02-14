<?php

$controller = 'Home';
$method = 'Index';
$parameters = [];

if ( isset( $_GET[ 'a' ] )  && !empty( $_GET[ 'a' ] ) ) {
    $url = explode( '/', $_GET[ 'a' ] );
    $controller = ucwords( $url[ 0 ] );

    if ( isset( $url[ 1 ] ) ) {
        $method = ucwords( $url[ 1 ] );
    }

    if ( sizeof( $url ) > 2 ) {
        for ( $i = 2; $i < sizeof($url); $i++ ) {
            array_push($parameters, $url[$i]);
        }
    }
}

try {
    //pasta onde são armazenados os controllers
    $controllersPath = APP . DIRECTORY_SEPARATOR . 'Controllers'. DIRECTORY_SEPARATOR;
    $controllerPath = $controllersPath . $controller. 'Controller.php';
    $controller = $controller . 'Controller';

    if ( file_exists( $controllerPath ) ) {
        require_once( $controllerPath );
        $controller = new $controller();

        if ( method_exists( $controller, $method ) ) {
            call_user_func_array(array($controller, $method), $parameters);
        } else {
            throw new Exception("O método $method não existe");
        }
    } else {
        throw new Exception( "O controller $controller não existe." );
        exit();
    }

} catch( \Exception $ex ) {
    echo $ex->getMessage();
}