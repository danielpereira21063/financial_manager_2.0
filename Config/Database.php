<?php

$dbConfig = json_decode(file_get_contents(ROOTPATH . '/config/settings.json'))->database;

var_dump($dbConfig);

define('HOSTNAME', $dbConfig->hostname);
define('DBNAME', $dbConfig->dbname);
define('USERNAME', $dbConfig->username);
define('PASSWORD', $dbConfig->password);
define('PORT', $dbConfig->port);
