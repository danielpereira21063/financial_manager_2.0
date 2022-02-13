<?php

class ControllerBase {
    protected function View( string $viewPath ) {
        $viewFile = APP . "/Views/$viewPath" ;
        $headerFile = APP . "/Views/Layouts/header.php";
        $footerFile = APP . "/View/Layouts/footer.php";
        try {
            include_once( $headerFile );

            if ( file_exists( $viewFile ) ) {
                include_once( $viewFile );
            } else {
                throw new Exception( 'O arquivo especificado não existe' );
            }

            include($footerFile);
        } catch( Exception $ex ) {
            echo "<h1>Erro ao carregar view $viewFile</h1>";
            echo "<p>$ex->getMessage()</p>";
            exit();
        }
    }


    private function Layout($layout) {
        
    }
}