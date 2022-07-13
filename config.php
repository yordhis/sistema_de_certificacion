<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'cimnav_admin');
define('DB_PASSWORD', 'admin18266');
define('DB_NAME', 'cimnav_usuarios');
 
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>