<?php
// Start session
session_start();


// Create Constants to store non repeating values
define('SITEURL', 'https://localhost/maternal_care/');
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD','');
define('DB_NAME','maternal_care');

$con = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); // Database Connection
$db_select = mysqli_select_db($con,DB_NAME) or die(mysqli_error()); // Selecting Database
?>