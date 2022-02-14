<?php

class MyException extends Exception {
    public function ShowError($msg) {

        //tratar erros aqui
        die();
    }
}