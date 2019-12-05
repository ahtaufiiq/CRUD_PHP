<?php
/**
 * using mysqli_connect for database connection
 */

$DB_Server = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'movie';

$mysqli = mysqli_connect($DB_Server, $DB_USER, $DB_PASS, $DB_NAME); 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>