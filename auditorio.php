<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
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
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body>
   

<style type="text/css">
  
  body
    {
    height: 100%;
  }

</style>




 


  <div class="parent2">

  <?php
require_once "header.php";?>
 


<a class="box2" href="auditorio.php" data-toggle="modal" data-size="xl" data-target="#exampleModal"> 

<button class="btn_ripple">
  <i class="fa fa-play"></i>
</button>

</a>
  </div>


<div>
  
<?php
require_once "footer.php";?>
</div>



<!-- Modal uno -->
<div class="modal fade" class="modal-fullscreen" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-xl  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="altura-live">

        <?php require_once "lives.php"; ?>
        <?php echo $lives[0]['url']; ?>

      </div>
      <div class="modal-footer">
       
      
      </div>
    </div>
  </div>
</div>
<!-- termina Modal uno -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/37e803730f.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>

    <script src="js/jquery.hotspot.js"></script>

    <!-- Custom JS -->
    <script src="js/demo.js"></script>
<script src="js/head.js"></script>
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
</body>



</html>
