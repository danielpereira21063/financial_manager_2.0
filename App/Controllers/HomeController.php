<?php
require_once(ROOTPATH . "/Core/Classes/ControllerBase.php");

Class HomeController extends ControllerBase {
    public function Index(){
        $this->View("Home/Index");
    }
}