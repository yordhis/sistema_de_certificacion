<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 


  
<style type="text/css">
  

</style>

<div class="parent3">

  <?php
require_once "header.php";?>
 
 
<div class="container">

<div class="tabs">
  
  <input type="radio" id="tab1" name="tab-control" checked>
  <input type="radio" id="tab2" name="tab-control">
  <input type="radio" id="tab3" name="tab-control">  

  <ul>
   
    <li title="JUEVES"><label for="tab1" role="button">

      <br><span>JUEVES 09 DE DICIEMBRE 2021</span></label></li>

    <li title="VIERNES"><label for="tab2" role="button">
      <br><span>VIERNES 10 DE DICIEMBRE 2021</span></label></li>    
      <li title="SABADO"><label for="tab3" role="button"><br><span>SABADO 11 DE DICIEMBRE 2021</span></label></li>
  </ul>
  
   <div class="slidertwo"></div>
  <div class="content">
    <section class="regular slider">
       <div class="one">
      <figure class="snip1344">
        <img src="expo/1.png" alt="profile-sample1" class="profile"/>
  <figcaption>

    <div class="grado">
      <p>Almirante. GABRIEL PÉREZ GARCÉS</p>
      <span>Comandante Armada Nacional de Colombia</span>
     </div>
    <h3>Apertura<span>08:00:00</span></h3>
    
  </figcaption>
  </figure>
</div>


  <div class="one">
      <figure class="snip1344">
        <img src="expo/222.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   
   <div class="grado">
     <p>Capitán de Navio.ANDRÉS A. OSORIO CARRILLO</p>
      <span>Jefe de Material Armada Nacional</span>
     </div>
    <h3>Apertura<span>08:45:00</span></h3>
    
  </figcaption>
  </figure>
</div>

  <div class="one">
      <figure class="snip1344">
        <img src="expo/3.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Capitán de Navio.FERNANDO A. MONTES VERGARA</p>
      <span>Asesor de Ingeniería Naval Jefatura de Material</span>
     </div>

    <h3>Apertura<span>09:30:00</span></h3>
    
  </figcaption>
  </figure>
</div>

 <div class="one">
      <figure class="snip1344">
        <img src="expo/4.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p> LUIS ALBERTO ORDOÑEZ RUBIO</p>
      <span>Vicealmirante (RA</span>
      
     </div>

    <h3>Apertura<span>10:15:00</span></h3>
    
  </figcaption>
  </figure>
</div>

 <div class="one">
      <figure class="snip1344">
        <img src="expo/5.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Capitan de Navio.LUIS ENRIQUE ARANIBAR OCAMPO</p>
      <span>Director de Ingeniería Naval Armada Nacional</span>
      
     </div>

    <h3>Apertura<span>11:00:00</span></h3>
    
  </figcaption>
  </figure>
</div>



<div class="one">
      <figure class="snip1344">
        <img src="expo/6.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Capitan de Fragata.JUAN CARLOS HINCAPIE AGUDELO</p>
      <span>Supervisor de Proyectos Especiales</span>
      
     </div>

    <h3>Apertura<span>08:00:00</span></h3>
    
  </figcaption>
  </figure>
</div>


<div class="one">
      <figure class="snip1344">
        <img src="expo/7.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Ingeniero.JUAN CARLOS DUARTE HOLGUÍN</p>
      <span>Docente de la Universidad de los Andes</span>
      
     </div>

    <h3>Apertura<span>14:00:00</span></h3>
    
  </figcaption>
  </figure>
</div>


<div class="one">
      <figure class="snip1344">
        <img src="expo/8.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Capitan de Navio.ROBERTO CARLOS ANGEL SANCHEZ</p>
      <span>Director de Mantenimiento Armada Nacional</span>
      
     </div>

    <h3>Apertura<span>14:45:00</span></h3>
    
  </figcaption>
  </figure>
</div>


<div class="one">
      <figure class="snip1344">
        <img src="expo/9.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Capitan de Fragata.RICHARD RENE TORO</p>
      <span>Jefe de Conceptualización de Proyectos</span>
      
     </div>

    <h3>Apertura<span>15:30:00</span></h3>
    
  </figcaption>
  </figure>
</div>

<div class="one">
      <figure class="snip1344">
        <img src="expo/10.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Teniente de Navio. EDWIN GIOVANNY PAIPA</p>
      <span>JCoordinador de Proyectos de Ingenieria</span>
      
     </div>

    <h3>Apertura<span>15:30:00</span></h3>
    
  </figcaption>
  </figure>
</div>




    </section>

<!-- termina seccicon slide uno -->

        <section class="regular2 slider">
        

<div class="one">
      <figure class="snip1344">
        <img src="expo/11.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Ingeniero.JOSE MANUEL MIRANDA SIERRA</p>
      <span>Atoridad Tecnica de Diseño en Ingenieria de Apoyo al Ciclo de Vida</span>
      
     </div>

    <h3>Apertura<span>08:00:00</span></h3>
    
  </figure>
</div>

<div class="one">
      <figure class="snip1344">
        <img src="expo/12.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Capitan de Fragata.HERNAN DE LA VALLE</p>
      <span>Jefe de Ingeniería de Guardacostas </span>
      
     </div>

    <h3>Apertura<span>08:45:00</span></h3>
    
  </figure>
</div>



<div class="one">
      <figure class="snip1344">
        <img src="expo/13.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Capitan de Navio.LUCIANO TRUJILLO MEDINA</p>
      <span>Jefe Departamento de Ingeniería FNC</span>
      
     </div>

    <h3>Apertura<span>09:30:00</span></h3>
    
  </figure>
</div>

<div class="one">
      <figure class="snip1344">
        <img src="expo/14.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Capitan de Navio. WILTER APONTE SUAREZ</p>
      <span>Jefe Departamento de Ingeniería FNP</span>
      
     </div>

    <h3>Apertura<span>10:15:00</span></h3>
    
  </figure>
</div>

<div class="one">
      <figure class="snip1344">
        <img src="expo/15.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Capitan de Navio. CRISTIAN SALAZAR ESPAÑA</p>
      <span>Jefe Departamento de Ingeniería FNS</span>
      
     </div>

    <h3>Apertura<span>11:00:00</span></h3>
    
  </figcaption>
  </figure>
</div>


<div class="one">
      <figure class="snip1344">
        <img src="expo/16.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Capitan de Fragata. EFRAIN RAFAEL SIADO ARTUZ</p>
      <span>Jefe Departamento de Ingeniería FNO</span>
      
     </div>

    <h3>Apertura<span>11:45:00</span></h3>
    
  </figcaption>
  </figure>
</div>




<div class="one">
      <figure class="snip1344">
        <img src="expo/17.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Capitan de Navio. ALEX MAURICIO SANTACRUZ</p>
      <span>Comandante del Batallón de Mantenimiento Anfibio</span>
      
     </div>

    <h3>Apertura<span>14:00:00</span></h3>
    
  </figcaption>
  </figure>
</div>


<div class="one">
      <figure class="snip1344">
        <img src="expo/18.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Capitan de Fragata. FRANCISCO GIL NAVIA</p>
      <span>Jefe Departamento Armas Navales y Electronica No 1</span>
      
     </div>

    <h3>Apertura<span>14:45:00</span></h3>
    
  </figcaption>
  </figure>
</div>



<div class="one">
      <figure class="snip1344">
        <img src="expo/19.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Capitan de Fragata OSCAR MOLINA OSORIO</p>
      <span>Jefe de Mantenimiento Aviación Naval</span>
      
     </div>

    <h3>Apertura<span>14:45:00</span></h3>
    
  </figcaption>
  </figure>
</div>


<div class="one">
      <figure class="snip1344">
        <img src="expo/20.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Vicealmirante (RA).CARLOS AUGUSTO GOMEZ PINILLOS</p>
      <span>Vicealmirante (RA)</span>
      </div>

    <h3>Apertura<span>16:15:00</span></h3>
    
  </figcaption>
  </figure>
</div>

<div class="one">
      <figure class="snip1344">
        <img src="expo/21.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Vicealmirante (RA).JAVIER DIAZ REINA</p>
      <span>Vicealmirante (RA)</span>
      </div>

    <h3>Apertura<span>16:15:00</span></h3>
    
  </figcaption>
  </figure>
</div>

<div class="one">
      <figure class="snip1344">
        <img src="expo/22.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Vicealmirante (RA).JORGE ENRIQUE CARREÑO MORENO</p>
      <span>Vicealmirante (RA)</span>
      </div>

    <h3>Apertura<span>16:15:00</span></h3>
    
  </figcaption>
  </figure>
</div>

<div class="one">
      <figure class="snip1344">
        <img src="expo/222.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>CN ANDRES A. OSORIO CARRILLO</p>
      <span>Jefe de Armada Nacional</span>
      </div>

    <h3>Apertura<span>16:15:00</span></h3>
    
  </figcaption>
  </figure>
</div>


        </section>



<!-- termina seccion 2-->

        <section class="regular2 slider">
    <div class="one">
      <figure class="snip1344">
        <img src="expo/23.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Vicealmirante.FRANCISCO HERNANDO CUBIDES GRANADOS</p>
      <span>Comandante de la Fuerza Naval del Pacifico</span>
      </div>

    <h3>Apertura<span>08:00:00</span></h3>
    
  </figcaption>
  </figure>
</div>

  <div class="one">
      <figure class="snip1344">
        <img src="expo/24.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Capitan de Fragata.TOM RODZEWICZ</p>
      <span>Director Centro Logístico de las Fuerzas de Superficie</span>
      </div>

    <h3>Apertura<span>08:45:00</span></h3>
    
  </figcaption>
  </figure>
</div>

 

 <div class="one">
      <figure class="snip1344">
        <img src="expo/25.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Capitan de Navio (RA).JOSÉ MARÍA RIOLA RODRÍGUEZ</p>
      <span>Lider Grupo de Investigacion ENAP</span>
      </div>

    <h3>Apertura<span>09:30:00</span></h3>
    
  </figcaption>
  </figure>
</div>

 <div class="one">
      <figure class="snip1344">
        <img src="expo/26.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Ingeniero. CARLOS ALEXANDER MURILLO</p>
      <span>Ingeniero de Servicios Técnicos - Belzona</span>
      </div>

    <h3>Apertura<span>10:15:00</span></h3>
    
  </figcaption>
  </figure>
</div>



<div class="one">
      <figure class="snip1344">
        <img src="expo/27.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Ingeniero.MARIA ALEJANDRA MARTINEZ DELGADO</p>
      <span>Gerente de Proyectos IDC Ingenieria de Confiabilidad</span>
      </div>

    <h3>Apertura<span>11:00:00</span></h3>
    
  </figcaption>
  </figure>
</div>

<div class="one">
      <figure class="snip1344">
        <img src="expo/28.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Teniente Coronel.HECTOR REYES CAMPAÑA</p>
      <span>Jefe Departamento de Ingeniería, Investigacion y Desarrollo Ejercito Chile</span>
      </div>

    <h3>Apertura<span>11:45:00</span></h3>
    
  </figcaption>
  </figure>
</div>

<div class="one">
      <figure class="snip1344">
        <img src="expo/29.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Capitan de Fragata. GUSTAVO VELANDIA CAMACHO</p>
      <span>Jefe de Astillero Naval Base ARC Málaga</span>
      </div>

    <h3>Apertura<span>14:00:00</span></h3>
    
  </figcaption>
  </figure>
</div>


<div class="one">
      <figure class="snip1344">
        <img src="expo/user.jpg" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Ingeniero. PABLO ALDANA</p>
      <span>Ingeniero.KEN KOMATSUDA</span>
      </div>

    <h3>Apertura<span>14:45:00</span></h3>
    
  </figcaption>
  </figure>
</div>

<div class="one">
      <figure class="snip1344">
        <img src="expo/30.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Ingeniero.LEONARDO FUENTES LUNG </p>
      <span>Ingeniero</span>
      </div>

    <h3>Apertura<span>15:30:00</span></h3>
    
  </figcaption>
  </figure>
</div>


<div class="one">
      <figure class="snip1344">
        <img src="expo/31.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Ingenieros.ANDRÉS ESTEBAN SANTOYO </p>
      <span>Ingeniero</span>
      </div>

    <h3>Apertura<span>15:30:00</span></h3>
    
  </figcaption>
  </figure>
</div>


<div class="one">
      <figure class="snip1344">
        <img src="expo/Vicealmirante FRANCISCO HERNANDO CUBIDES GRANADOS.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Vicealmirante FRANCISCO HERNANDO CUBIDES GRANADOS</p>
      <span>Ingeniero</span>
      </div>

    <h3>Apertura<span>17:00:00</span></h3>
    
  </figcaption>
  </figure>
</div>



<div class="one">
      <figure class="snip1344">
        <img src="expo/222.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Capitan de Navio ANDRÉS A. OSORIO CARRILLO</p>
      <span>Jefe de material Armada Nacional</span>
      </div>

    <h3>Apertura<span>17:00:00</span></h3>
    
  </figcaption>
  </figure>
</div>


        </section>
    
  </div>
</div>





  


</div>

</div>

<div>
  

</div>
        
      



<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/37e803730f.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>

   
 <script src="slick/slick.min.js" type="text/javascript" charset="utf-8"></script>


    <!-- Custom JS -->
    <script src="js/demo.js"></script>
<script type="text/javascript">
    
    $(window).on('load', function(){
      $(".regular").slick({
        dots: false,
        infinite: true,
        slidesToShow: 3,
        variableWidth: true,

       slidesToScroll: 3

      });

        
    });

  </script>
  <script type="text/javascript">
    
    $(window).on('load', function(){
 $(".regular2").slick({
       slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        centerMode: false,
        focusOnSelect: true,
        variableWidth: true
    
      });
      });
  </script>

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
  
  
  


 





</body>


</html>
