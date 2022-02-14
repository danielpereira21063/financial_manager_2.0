<?php

$controller = 'Home';
$method = 'Index';

if ( isset( $_GET[ 'a' ] )  && !empty( $_GET[ 'a' ] ) ) {
    $url = explode( '/', $_GET[ 'a' ] );
    $controller = ucwords( $url[ 0 ] );

    if ( isset( $url[ 1 ] ) ) {
        $method = ucwords( $url[ 1 ] );
    }
}

try {
    //pasta onde são armazenados os controllers
    $controllersPath = APP . DIRECTORY_SEPARATOR . 'Controllers'. DIRECTORY_SEPARATOR;
    $controllerPath = $controllersPath . $controller. 'Controller.php';
    $controller = $controller . 'Controller';

    if ( file_exists( $controllerPath ) ) {
        require_once( $controllerPath );
        $Controller = new $controller();
        $Controller->teste();
    } else {
        throw new Exception( "O controller $controller não existe." );
        exit();
    }

} catch( \Exception $ex ) {
    echo $ex->getMessage();
}