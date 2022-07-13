
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
<link rel="stylesheet" type="text/css" href="slick/slick.css">
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/agenda.css">
 <link rel="stylesheet" type="text/css" href="css/expositores.css">
 <link rel="stylesheet" type="text/css" href="css/galeria.css">
</head>

<body>

<style type="text/css">
  


  .btn{
  position: absolute;
  top: 15px;
  left: 45px;
  height: 45px;
  width: 45px;
  text-align: center;

  border-radius: 3px;
  cursor: pointer;
  transition: left 0.4s ease;
  z-index: 300;
}
.btn.click{
  left: 260px;
}
.btn span{
 color: #ffac00;
font-size: 50px;
line-height: 45px;
}
.btn.click span:before{
  content: '\f00d';
}
.sidebar{
  position: fixed;
  width: 250px;
  height: 100%;
  left: -250px;
  background: #1b1b1b;
  transition: left 0.4s ease;
  z-index: 5;
}
.sidebar.show{
  left: 0px;
}
.sidebar .text{
  color: white;
  font-size: 25px;
  font-weight: 600;
  line-height: 65px;
  text-align: center;
  background: #003057;
  letter-spacing: 1px;
  font-family: 'Poppins', sans-serif;
}
nav ul{
  background: #fff;
  height: 100%;
  width: 100%;
  list-style: none;
  padding-left: 24px;
}
nav ul li{
  line-height: 60px;
  border-top: 1px solid rgba(255,255,255,0.1);
}
nav ul li:last-child{
  border-bottom: 1px solid rgba(255,255,255,0.05);
}
nav ul li a{
  font-family: 'Poppins', sans-serif;
      font-weight: 100;
  position: relative;
  color: #333;;
  text-decoration: none;
  font-size: 18px;
 
  font-weight: 300;
  display: block;
  width: 100%;

}
nav ul li.active a{

border-left-color: #ffac00;


}
nav ul li a:hover{
  background: white;
}
nav ul ul{
  position: static;
  display: none;
}
nav ul .feat-show.show{
  display: block;
}
nav ul .serv-show.show1{
  display: block;
}
nav ul ul li{
  line-height: 42px;
  border-top: none;
}
nav ul ul li a{
  font-size: 17px;
  color: #e6e6e6;
  padding-left: 80px;
}
nav ul li.active ul li a{
  color: white;
  background: #1b1b1b;
  border-left-color: transparent;
}
nav ul ul li a:hover{
  color: cyan!important;
  background: #1e1e1e !important;
}
nav ul li a span{
  position: absolute;
  top: 50%;
  right: 20px;
  transform: translateY(-50%);
  font-size: 22px;
  transition: transform 0.4s;
}
nav ul li a span.rotate{
  transform: translateY(-50%) rotate(-180deg);
}
.content{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: #202020;
  z-index: -1;
  text-align: center;
}
.content .header{
  font-size: 45px;
  font-weight: 600;
}
.content p{
  font-size: 30px;
  font-weight: 500;
}
iframe{
      width: 100%;
      height: 100%;
      
    }

/* #margen{
  margin: 15px;
  padding: 70px, 15px, 10px, 10px;

} */

#altura-live{
  height: 450px;
}
</style>










  <div class="header">
    <div class="btn">
  <span class="fas fa-bars"></span>
</div>
<nav class="sidebar">
  <div class="text">
    Bienvenido
  </div>
  <ul>
  
   <li><a>Hola! <?php echo htmlspecialchars($_SESSION["username"]); ?></a></li>
  <li><a href="welcome.php">Inicio</a></li>
  <li><a href="auditorio.php">Auditorio</a></li>
  <li><a href="agenda.php">Agenda</a></li>
  <li><a href="expositores.php">Expositores</a></li>
  <li><a href="generarCertificado.php">Certificados</a></li>
  <li><a href="galeria.php">Galeria</a></li>
  <li><a class="cerrar" href="logout.php">Cierra la sesión</a></li>
  
 </ul>
</nav>
<div class="logo-head">
  <img src="images/logo-1.png">
</div>
  </div>
 
  






        
      





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
