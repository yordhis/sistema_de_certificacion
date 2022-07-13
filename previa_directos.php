<?php
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
?>
 


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/estilos.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<style>
    #label-txt{
        font-size: 25px;
    }

    iframe{
      width: 100%;
      height: 100%;
    }
</style>

<body>
   






<!-- example 1 - using absolute position for center -->
<nav class="navbar navbar-expand-md navbar-dark justify-content-center">    <img class="img-fluid logo-bien" src="images/logo.png">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="collapsingNavbar">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="panel_admin.php">Inicio</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="subir_video.php">Subir video a Galeria</a>
            </li>
            <li>
                <a class="nav-link" href="panel_admin.php">Registrar un nuevo LIVE</a>
            </li>

            <li>

                <a class="nav-link" href="previa_directos.php">Vistas previa del en vivo</a>
            </li>
            
            <li>

                <a class="nav-link" href="previa_galeria.php">Vistas de galeria</a>
            </li>
            
            
        </ul>
        <ul class="navbar-nav ml-auto username">
            <li><a>Hola! <?php echo htmlspecialchars($_SESSION["username"]); ?></a></li>
        <li><a class="cerrar" href="logout.php">Cierra la sesión</a></li>
        </ul>
    </div>
</nav>
<div class="container">
  <!-- Content here -->
  <h3 class="presentaciones"><span style="color:brown;">En vivo</span> Configurados</h3>

    <?php require_once "lives.php"; ?>
    

      <div class="container">
        <div class="row">  
              <?php foreach ($lives as $live) { ?>
                
                <div class="col-sm-4" style="padding-top: 5rem;padding-bottom: 5rem;">

                      <h1><?php echo $live['titulo']; ?></h1>
                      
                      <?php echo $live['url'] ?>
                      
                      </iframe>
                      <p style="font-size: 15px;">
                      <b>Descripción:</b>
                        <?php echo $live['descripcion'] ?>
                      </p>

                      <a href="eliminar.php?id=<?php echo $live['id'] ?>">
                        <button type="submit">Eliminar</button>
                      </a>
                </div>
               
                
               
              <?php } ?>
        </div>
      </div>  



  
  
</div>

  





<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/37e803730f.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>

    <script src="js/jquery.hotspot.js"></script>

    <!-- Custom JS -->
    <script src="js/demo.js"></script>

    <script type="text/javascript">
      

    $('a[data-modal]').on('click',function(){
  var $page = $(this).data('page');
  var $image = $(this).data('image');
  var $video = $(this).data('video');
  var $title = $(this).data('title');
  var $size = $(this).data('size');
  $('#quickview .modal-title').text($title);
  if ($size) { $('#quickview .modal-dialog').addClass('modal-'+$size); }
  if ($image) {
    $('#quickview .modal-body').html('<div class="text-center"><img class="img-fluid" src="'+$image+'"></div>');
  } else if ($video) {
    $('#quickview .modal-body').html('<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="https://www.youtube-nocookie.com/embed/'+$video+'?autoplay=1" allowfullscreen></iframe></div>');
  }
  if ($page) {
    $('#quickview .modal-body').load($page,function(){
      $('#quickview').modal({show:true});
    });
  } else {
    $('#quickview').modal({show:true});
  }
  $('#quickview').on('hidden.bs.modal', function(){
    $('#quickview .modal-title').text('');
    $('#quickview .modal-body').html('');
    if ($size) { $('#quickview .modal-dialog').removeClass('modal-'+$size); }
  });
});
    </script>
</body></html>
