<?php
require_once "config.php";

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
if($_SESSION["id"] != 1){
    session_destroy();
    header("location: login.php");
    exit;
}
        
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_GET['id'];
        }
        // CONSULTA 
        $sql = "DELETE FROM urls WHERE id = $id";
        $stmt = mysqli_prepare($link, $sql);
       
        if(mysqli_stmt_execute($stmt)){
            header("location: previa_directos.php");
        }else {
            echo '--No elimino el LIVE--';
        }
?>