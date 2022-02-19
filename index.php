<?php

if(!isset($_GET['a'])) {
    header('Location: ?a=home/index');
}

require_once('./config/paths.php');
require_once('./config/database.php');
require_once('./core/database/DBContext.php');
require_once('./config/routes.php');

// $context = new DBContext();
// $context->query("Select * from movimentos", []);