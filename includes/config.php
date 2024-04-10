<?php

$dbUser = 'root';
$dbPass = '';
$dbName = 'phprest';

$db = new PDO('mysql:host=localhost;dbname='. $dbName.';charset:utf8', $dbUser, $dbPass);

//set attributes
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); //turn off emulation - no security!
$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  //turn on errors - good practice

define("APP_NAME", "PHP REST API");