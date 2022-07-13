<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
$caratecNumber = strlen($_SESSION["nombres"]);
$sizeFont = 35;

if ($caratecNumber >= 30) {
  $sizeFont = 25;
}


?>
 


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta title="Certificado">
<link href="css/estilos.css" rel="stylesheet">
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<style>

.container {
    text-align: center;
    width: 1024px;
    height: 750px;
}
.caja {
    
text-align: center;

display: flex;
align-content: center;
align-items: center;
flex-wrap: wrap;
}
.caja img{
    border-style: none;
position: relative;
left: 0px;
display: block;
margin: 0px auto;
}

.btn-certificado{
    border-radius: 35px;
    border-color: #0e0e0e;
    
}

#text-certificado {
    position: relative;
    top: -24rem;
    left: 0rem;
    margin: 0 auto;
    width: 100%;
    height: 100%;
    font-family: Arial, Helvetica, sans-serif;
    font-size: <?php echo $sizeFont?>;
    text-transform: capitalize;
    bottom: 0px;
    text-align: center;
  
}

.btn-certificado{
    display: block;
    margin: 0px auto;
}


</style>
    


</head>

<body style=" background:#0E3871">
   






<?php
require_once "header.php";?>


<br>
<br>
<!-- certificado -->

  
    <div class="container">
        <h2 style="color:#fff">Vista Previa</h2>
        <div id="certificado" class="caja">
            <img src="images/diploma.jpg" width="750" height="600" alt="certificado">

    
    
            <p id="text-certificado"><?php echo $_SESSION["nombres"] ?> <br><span style="font-size: 20px;"> <?php echo "C.I:" . number_format($_SESSION["cedula"],0,',','.') ?> </span> </p>

            <input type="hidden" id="nombres" value="<?php echo $_SESSION["nombres"]?>">
            <input type="hidden" id="cedula" value="C.I:<?php echo number_format($_SESSION["cedula"],0,',','.') ?>">
            <br> <br> <br>
            <button class="btn-certificado" id="generarPdf">
                <img src="images/iconoPDF.png" alt="imprimir pdf" width="75" height="75">
            </button>
        </div>
    </div>

  
    
<!-- jsPDF library -->
<script src="js/jquery.min.js"></script>
    <script src="jsPDF/dist/jspdf.min.js"></script>
    <script src="js/img.js"></script>
    <script src="js/generarPdf.js"></script>

<script src="https://kit.fontawesome.com/37e803730f.js" crossorigin="anonymous"></script>
         <script type="text/javascript">
      

$('.btn').click(function(){
  $(this).toggleClass("click");
  $('.sidebar').toggleClass("show");
});
$('.feat-btn').click(function(){
  $('nav ul .feat-show').toggleClass("show");
  $('nav ul .first').toggleClass("rotate");
});
$('.serv-btn').click(function(){
  $('nav ul .serv-show').toggleClass("show1");
  $('nav ul .second').toggleClass("rotate");
});
$('nav ul li').click(function(){
  $(this).addClass("active").siblings().removeClass("active");
});
  </script>
</body></html>
