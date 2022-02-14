<?php
require_once(ROOTPATH . "/Core/Classes/ControllerBase.php");

Class HomeController extends ControllerBase {
    public function index(){

    }

    public function teste($test = "não chegou nada aqui") {
        echo $test;
    }
}
