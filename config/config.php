<?php


define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'user_management_db');
$db_port = 3306; 

$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, $db_port);


if($mysqli === false) {
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

