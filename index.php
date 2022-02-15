<?php
require_once('./config/paths.php');
require_once('./config/routes.php');
require_once('./config/database.php');

if(!isset($_GET['a'])) {
    header('Location: ?a=home/index');
}