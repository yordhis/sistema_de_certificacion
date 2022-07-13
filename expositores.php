<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 

<div class="parentcuatro">

  <?php
require_once "header.php";?>



<div class="infinite-scroll-area">
    <ul id="infinite-scroll-list" class="infinite-scroll-list">
        <li>
             <div class="one">
      <figure class="snip1344">
        <img src="expo/1.png" alt="profile-sample1" class="profile"/>
  <figcaption>

    <div class="grado">
      <p>Almirante. GABRIEL PÉREZ GARCÉS</p>
      <span>Comandante Armada Nacional de Colombia</span>
     </div>
   
    
  </figcaption>
  </figure>
</div>
        </li>
        <li>
              <div class="one">
      <figure class="snip1344">
        <img src="expo/222.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   
   <div class="grado">
     <p>Capitán de Navio.ANDRÉS A. OSORIO CARRILLO</p>
      <span>Jefe de Material Armada Nacional</span>
     </div>
   
    
  </figcaption>
  </figure>
</div>
        </li>
        <li>
            
  <div class="one">
      <figure class="snip1344">
        <img src="expo/3.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Capitán de Navio.FERNANDO A. MONTES VERGARA</p>
      <span>Asesor de Ingeniería Naval Jefatura de Material</span>
     </div>

   
    
  </figcaption>
  </figure>
</div>
        </li>
        <li>
            <div class="one">
      <figure class="snip1344">
        <img src="expo/4.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p> LUIS ALBERTO ORDOÑEZ RUBIO</p>
      <span>Vicealmirante (RA</span>
      
     </div>

   
    
  </figcaption>
  </figure>
</div>
        </li>
        <li>
            <div class="one">
      <figure class="snip1344">
        <img src="expo/5.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Vicealmirante (RA).LUIS ALBERTO ORDOÑEZ RUBIO</p>
      <span>Director de Ingeniería Naval Armada Nacional</span>
      
     </div>

   
    
  </figcaption>
  </figure>
</div>
        </li>
        <li>
           <div class="one">
      <figure class="snip1344">
        <img src="expo/6.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Capitan de Fragata.JUAN CARLOS HINCAPIE AGUDELO</p>
      <span>Supervisor de Proyectos Especiales</span>
      
     </div>

    
    
  </figcaption>
  </figure>
</div>
        </li>
        <li>
            <div class="one">
      <figure class="snip1344">
        <img src="expo/7.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Ingeniero.JUAN CARLOS DUARTE HOLGUÍN</p>
      <span>Docente de la Universidad de los Andes</span>
      
     </div>


    
  </figcaption>
  </figure>
</div>
        </li>
        <li>
            <div class="one">
      <figure class="snip1344">
        <img src="expo/8.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Capitan de Navio.ROBERTO CARLOS ANGEL SANCHEZ</p>
      <span>Director de Mantenimiento Armada Nacional</span>
      
     </div>

   
    
  </figcaption>
  </figure>
</div>

        </li>
        <li>
         <div class="one">
      <figure class="snip1344">
        <img src="expo/9.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Capitan de Fragata.RICHARD RENE TORO</p>
      <span>Jefe de Conceptualización de Proyectos</span>
      
     </div>


    
  </figcaption>
  </figure>
</div>
        </li>
        <li>
            <div class="one">
      <figure class="snip1344">
        <img src="expo/10.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Teniente de Navio. EDWIN GIOVANNY PAIPA</p>
      <span>JCoordinador de Proyectos de Ingenieria</span>
      
     </div>

    
  </figcaption>
  </figure>
</div>
        </li>
        <li>
          <div class="one">
      <figure class="snip1344">
        <img src="expo/11.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Ingeniero.JOSE MANUEL MIRANDA SIERRA</p>
      <span>Atoridad Tecnica de Diseño en Ingenieria de Apoyo al Ciclo de Vida</span>
      
     </div>

   
    
  </figure>
</div>
        </li>
        <li>
           
<div class="one">
      <figure class="snip1344">
        <img src="expo/12.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Capitan de Fragata.HERNAN DE LA VALLE</p>
      <span>Jefe de Ingeniería de Guardacostas </span>
      
     </div>


    
  </figure>
</div>
        </li>
        <li>
            <div class="one">
      <figure class="snip1344">
        <img src="expo/13.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Capitan de Navio.LUCIANO TRUJILLO MEDINA</p>
      <span>Jefe Departamento de Ingeniería FNC</span>
      
     </div>

   
    
  </figure>
</div>
        </li>
        <li>
          <div class="one">
      <figure class="snip1344">
        <img src="expo/14.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Capitan de Navio. WILTER APONTE SUAREZ</p>
      <span>Jefe Departamento de Ingeniería FNP</span>
      
     </div>

   
    
  </figure>
</div>
        </li>
        <li>
            <div class="one">
      <figure class="snip1344">
        <img src="expo/15.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Capitan de Navio. CRISTIAN SALAZAR ESPAÑA</p>
      <span>Jefe Departamento de Ingeniería FNS</span>
      
     </div>

   
    
  </figcaption>
  </figure>
</div>
        </li>
        <li>
           <div class="one">
      <figure class="snip1344">
        <img src="expo/16.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Capitan de Fragata. EFRAIN RAFAEL SIADO ARTUZ</p>
      <span>Jefe Departamento de Ingeniería FNO</span>
      
     </div>

 
    
  </figcaption>
  </figure>
</div>
        </li>
        <li>
            <div class="one">
      <figure class="snip1344">
        <img src="expo/17.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Capitan de Navio. ALEX MAURICIO SANTACRUZ</p>
      <span>Comandante del Batallón de Mantenimiento Anfibio</span>
      
     </div>

    
    
  </figcaption>
  </figure>
</div>
        </li>
        <li>
            <div class="one">
      <figure class="snip1344">
        <img src="expo/18.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Capitan de Fragata. FRANCISCO GIL NAVIA</p>
      <span>Jefe Departamento Armas Navales y Electronica No 1</span>
      
     </div>

    
    
  </figcaption>
  </figure>
</div>
        </li>
        <li>
           
<div class="one">
      <figure class="snip1344">
        <img src="expo/19.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Capitan de Fragata OSCAR MOLINA OSORIO</p>
      <span>Jefe de Mantenimiento Aviación Naval</span>
      
     </div>


    
  </figcaption>
  </figure>
</div>
        </li>
        <li>
           
<div class="one">
      <figure class="snip1344">
        <img src="expo/20.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Vicealmirante (RA).CARLOS AUGUSTO GOMEZ PINILLOS</p>
      <span>Vicealmirante (RA)</span>
      </div>

 
    
  </figcaption>
  </figure>
</div>
        </li>
        <li>
           <div class="one">
      <figure class="snip1344">
        <img src="expo/21.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Vicealmirante (RA).JAVIER DIAZ REINA</p>
      <span>Vicealmirante (RA)</span>
      </div>

  
    
  </figcaption>
  </figure>
</div>
        </li>
        <li>
           <div class="one">
      <figure class="snip1344">
        <img src="expo/22.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Vicealmirante (RA).JORGE ENRIQUE CARREÑO MORENO</p>
      <span>Vicealmirante (RA)</span>
      </div>

  
    
  </figcaption>
  </figure>
</div>
        </li>
      
        <li>
            <div class="one">
      <figure class="snip1344">
        <img src="expo/23.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Vicealmirante.FRANCISCO HERNANDO CUBIDES GRANADOS</p>
      <span>Comandante de la Fuerza Naval del Pacifico</span>
      </div>

  
    
  </figcaption>
  </figure>
</div>
        </li>
        <li>
             <div class="one">
      <figure class="snip1344">
        <img src="expo/24.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Capitan de Fragata.TOM RODZEWICZ</p>
      <span>Director Centro Logístico de las Fuerzas de Superficie</span>
      </div>


    
  </figcaption>
  </figure>
</div>
        </li>
        <li>
           
 <div class="one">
      <figure class="snip1344">
        <img src="expo/25.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Capitan de Navio (RA).JOSÉ MARÍA RIOLA RODRÍGUEZ</p>
      <span>Lider Grupo de Investigacion ENAP</span>
      </div>

   
  </figcaption>
  </figure>
</div>
        </li>
        <li>
             <div class="one">
      <figure class="snip1344">
        <img src="expo/26.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Ingeniero. CARLOS ALEXANDER MURILLO</p>
      <span>Ingeniero de Servicios Técnicos - Belzona</span>
      </div>

    
    
  </figcaption>
  </figure>
</div>
        </li>
        <li>
            <div class="one">
      <figure class="snip1344">
        <img src="expo/27.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Ingeniero.MARIA ALEJANDRA MARTINEZ DELGADO</p>
      <span>Gerente de Proyectos IDC Ingenieria de Confiabilidad</span>
      </div>

  
    
  </figcaption>
  </figure>
</div>
        </li>
        <li>
            <div class="one">
      <figure class="snip1344">
        <img src="expo/28.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Teniente Coronel.HECTOR REYES CAMPAÑA</p>
      <span>Jefe Departamento de Ingeniería, Investigacion y Desarrollo Ejercito Chile</span>
      </div>

  
    
  </figcaption>
  </figure>
</div>
        </li>
        <li>
           <div class="one">
      <figure class="snip1344">
        <img src="expo/29.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Capitan de Fragata. GUSTAVO VELANDIA CAMACHO</p>
      <span>Jefe de Astillero Naval Base ARC Málaga</span>
      </div>

   
    
  </figcaption>
  </figure>
</div>
        </li>
        <li>
            <div class="one">
      <figure class="snip1344">
        <img src="expo/user.jpg" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Ingeniero. PABLO ALDANA</p>
      <span>Ingeniero.KEN KOMATSUDA</span>
      </div>

  
  </figcaption>
  </figure>
</div>
        </li>


          <li>
        <div class="one">
      <figure class="snip1344">
        <img src="expo/30.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Ingeniero.LEONARDO FUENTES LUNG </p>
      <span>Ingeniero</span>
      </div>

  
    
  </figcaption>
  </figure>
</div>

        </li> 

        <li>
          

<div class="one">
      <figure class="snip1344">
        <img src="expo/31.png" alt="profile-sample1" class="profile"/>
  <figcaption>
   <div class="grado">
      <p>Ingenieros.ANDRÉS ESTEBAN SANTOYO </p>
      <span>Ingeniero</span>
      </div>

    
    
  </figcaption>
  </figure>
</div>
        </li>

      
      


           </ul>
    <button id="more-btn" class="more-btn">Más expositores</button>
</div>
 
 
</div>


   <a class="top-link hide" href="" id="js-top">
  <i class="fas fa-chevron-up"></i>
  
</a>   

<?php
require_once "footer.php";?>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/37e803730f.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>

    <div class="error"></div>

<script src="http://www.jqueryscript.net/demo/jQuery-Plugin-For-Water-Ripple-Animation-ripples/js/jquery.ripples.js">
</script>
<!-- partial -->
  
<script src='https://www.jqueryscript.net/demo/jQuery-Plugin-For-Water-Ripple-Animation-ripples/js/jquery.ripples.js'></script>



    <script src="js/jquery.hotspot.js"></script>

    <!-- Custom JS -->
    <script src="js/demo.js"></script>

   
  
  <script type="text/javascript">
    

const infiniteScroll = (wrapperEl, moreBtn) => {
    let items = document.querySelector(wrapperEl).children;
    let moreBtnDOM = document.querySelector(moreBtn);

    let itemsNum = items.length;
    let currentShowNum = 2;
    let lastShowNum = 0;

    const SHOW_NUM = 4;
    const INTERVAL = 200;

    showItems();

    moreBtnDOM.addEventListener('click', () => {
        showItems();
    });

    function showItems() {
        currentShowNum += SHOW_NUM;

        if(currentShowNum > itemsNum) {
            for(let i = lastShowNum; i < itemsNum; i++){
                setTimeout(() => {
                    items[i].classList.add('show');
                }, INTERVAL * (i - lastShowNum));
            }

            moreBtnDOM.remove();

        } else {
            for(let i = lastShowNum; i < currentShowNum; i++){
                setTimeout(() => {
                    items[i].classList.add('show');
                }, INTERVAL * (i - lastShowNum));
            }
        }

        lastShowNum = currentShowNum;
    }
};

infiniteScroll('#infinite-scroll-list', '#more-btn');

  </script>
  <script type="text/javascript">
    
// Set a variable for our button element.
const scrollToTopButton = document.getElementById('js-top');

// Let's set up a function that shows our scroll-to-top button if we scroll beyond the height of the initial window.
const scrollFunc = () => {
  // Get the current scroll value
  let y = window.scrollY;
  
  // If the scroll value is greater than the window height, let's add a class to the scroll-to-top button to show it!
  if (y > 0) {
    scrollToTopButton.className = "top-link show";
  } else {
    scrollToTopButton.className = "top-link hide";
  }
};

window.addEventListener("scroll", scrollFunc);

const scrollToTop = () => {
  // Let's set a variable for the number of pixels we are from the top of the document.
  const c = document.documentElement.scrollTop || document.body.scrollTop;
  
  // If that number is greater than 0, we'll scroll back to 0, or the top of the document.
  // We'll also animate that scroll with requestAnimationFrame:
  // https://developer.mozilla.org/en-US/docs/Web/API/window/requestAnimationFrame
  if (c > 0) {
    window.requestAnimationFrame(scrollToTop);
    // ScrollTo takes an x and a y coordinate.
    // Increase the '10' value to get a smoother/slower scroll!
    window.scrollTo(0, c - c / 10);
  }
};

// When the button is clicked, run our ScrolltoTop function above!
scrollToTopButton.onclick = function(e) {
  e.preventDefault();
  scrollToTop();
}

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
