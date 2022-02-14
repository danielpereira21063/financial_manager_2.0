<?php
require_once(ROOTPATH . "/Core/Classes/ControllerBase.php");

Class HomeController extends ControllerBase {
    public function index(){

    }

    public function teste() {
        echo "Chamando controller, método teste";
    }
}
