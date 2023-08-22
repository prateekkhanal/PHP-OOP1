<?php

// create a database object
include "database.php";
$server = 'localhost';
$user = 'root';
$password = '';
$dbName = 'trial';
$connection = new Database($server, $user, $password, $dbName); // store the object
?>
