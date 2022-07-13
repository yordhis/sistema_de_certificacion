<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
  <?php require_once "header.php";?>



<div class="container" style="padding-top: 5rem;padding-bottom: 5rem;">
 
      
      <?php require_once "galerias.php"; ?>
    
      <div class="row">  

            <div class="col-sm-12 text-center text-primary">
              <h1>Galeria</h1>
            </div>
            <?php foreach ($galerias as $galeria) { ?>
              
              <div class="col-sm-4"  style="padding-top: 5rem;padding-bottom: 5rem;">

                    <h1><?php echo $galeria['titulo']; ?></h1>
                    
                    <?php echo $galeria['iframe_code'] ?>
                    
                    </iframe>
                    <p style="font-size: 15px;">
                    <b>Descripción:</b>
                      <?php echo $galeria['descripcion'] ?>
                    </p>

                  
              </div>
             
              
             
            <?php } ?>
      </div>
</div>

<?php
require_once "footer.php";?>



<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/37e803730f.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>

    <script src="js/jquery.hotspot.js"></script>

    <!-- Custom JS -->
    <script src="js/demo.js"></script>

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
