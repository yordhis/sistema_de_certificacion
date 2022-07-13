<?php
error_reporting(0);
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/certificado.css">



    <meta charset="utf-8">
    <title>Certificado</title>
</head>
<body>
<style type="text/css">
    

    
    .certificado{
  position: absolute;
top: 0;
left: 0;
background-image: url("diploma.jpg");
height: 100%;
background-position: 0rem 0rem;
background-repeat: no-repeat;
background-size: cover;
display: flex;
align-content: center;
align-items: center;
justify-content: center;
width: 100%;
height: 144%;
}

</style>
    
<div class="container">
   <div class="certificado">
       
<h1 style="transform : capitalize">Hola! <?php echo ($_SESSION["nombres"]); ?> </h1>
    

   </div> 


</div>
      
</body>
</html>