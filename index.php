<?php

include('./Config/paths.php');
include('./Config/routes.php');

if(!isset($_GET['a'])) {
    header('Location: ?a=home/index');
}