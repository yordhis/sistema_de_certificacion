<?php
// Include config file
require_once "config.php";

 
// Define variables and initialize with empty values
$username = $password = $nombres =$email = $cedula = $telefono = $especialidad = $categoria=  $grado = $fuerza = $componente = $unidad = $pais =  "";
$username_err = $password_err = $nombres_err = $email_err = $cedula_err = $telefono_err =
 $especialidad_err = $categoria_err =$grado_err = $fuerza_err = $componente_err = $unidad_err =$pais_err ="";

 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
  



    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Por favor ingrese un usuario.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "Este usuario ya fue tomado.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Al parecer algo salió mal.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Por favor ingresa una contraseña.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "La contraseña al menos debe tener 6 caracteres.";
    } else{
        $password = trim($_POST["password"]);
    }

 // nombre
     if(empty(trim($_POST["nombres"]))){
        $nombres_err = "Por favor ingresa su nombre y apellido.";     
    }else{
        $nombres = trim($_POST["nombres"]);
    }
//email
      if(empty(trim($_POST["email"]))){
        $email_err = "Por favor ingresa email.";     
    }else{
        $email = trim($_POST["email"]);
    }

    //cedula
      if(empty(trim($_POST["cedula"]))){
        $cedula_err = "Por favor ingresa cedula.";     
    }else{
        $cedula = trim($_POST["cedula"]);
    }


     if(empty(trim($_POST["telefono"]))){
        $telefono_err = "Por favor ingresa telefono.";     
    }else{
        $telefono = trim($_POST["telefono"]);
    }


 if(empty(trim($_POST["especialidad"]))){
        $especialidad_err = "Por favor ingresa especialidad.";     
    }else{
        $especialidad = trim($_POST["especialidad"]);
    }

  // id's
     if(empty($_POST["categoria"])){
        $categoria_err = "Por favor ingresa categoria.";     
    }else{
      $categoria = intval($_POST["categoria"]);
      echo "cate: " . $categoria;
  }



      if(empty($_POST["componente"])){
        $componente_err = "Por favor ingresa componente.";     
    }else{
      $componente = intval($_POST["componente"]);
    }

      if(empty($_POST["grado"])){
        $grado_err = "Por favor ingresa categoria.";     
    }else{
        $grado = intval($_POST["grado"]);
    }

      if(empty(trim($_POST["unidad"]))){
        
        $unidad_err = "Por favor ingresa unidad.";
        
      }else{
        $unidad = intval($_POST["unidad"]);
      }
    // end id's
    
    if(empty(trim($_POST["fuerza"]))){
      $fuerza_err = "Por favor ingresa fuerza.";     
    }else{
        $fuerza = trim($_POST["fuerza"]);
    }

    if(empty(trim($_POST["pais"]))){
        $pais_err = "Por favor ingresa su pais.";     
    }else{
        $pais= trim($_POST["pais"]);
    }







     
   
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username,  password, nombres,email,cedula,telefono,especialidad,id_categoria,id_componente,id_grado, id_unidad,fuerza,pais) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssssiiiiss", $param_username, $param_password,$nombres,$email,$cedula,$telefono,$especialidad,$categoria,$id_componente, $id_grado, $id_unidad, $fuerza, $pais);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $nombres = $nombres;
            $email = $email;
            $cedula = $cedula;
            $telefono = $telefono;
            $especialidad = $especialidad;
          
            $categoria = $categoria;
            $id_componente = $componente;
            $id_grado = $grado;
            $id_unidad = $unidad;
            $fuerza = $fuerza;
            $pais = $pais;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Algo salió mal, por favor inténtalo de nuevo.". mysqli_error($link);
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="build/css/intlTelInput.css">
    <link rel="stylesheet" href="css/estilos.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

</head>
<body class="principal">


    
   <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      
        
    
      <ul class="nav navbar-nav navbar-left">
        <li><a class="ini" href="/">Inicio</a></li>
        <li><a class="log" href="login.php"><span class="glyphicon glyphicon-log-in"></span> Ingresar</a></li>
      </ul>
    </div>
  </div>
</nav>

  
   <div class="container">
  <div class="">
    <div class="col-6 formulario">
       <div class="wrapper">
        <img class="img-fluid logo" src="images/logo-1.png">
        <h3 class="title">Registre sus datos .</h3>
        <p class="title2">y forma parte del evento .</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">


            <div class="form-group col-md-6">
      
       <label>Usuario Correo Electrónico Institucional</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
    </div>
    <div class="form-group col-md-6">
      <label>Contraseña</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
    </div>


            <div class="form-group col-md-6">
      
  
                <label>Nombre y Apellidos Completos</label>
                <input type="text" name="nombres" class="form-control" value="<?php echo $nombres; ?>">
                <span class="help-block"><?php echo $nombres_err; ?></span>
    </div>
    <div class="form-group col-md-6">
      <label>Correo Electrónico Institucional</label>
                <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
    </div>


    <div class="form-group col-md-6">
      
  
                
                <label>Número de Cédula</label>
                <input type="number" name="cedula" class="form-control" value="<?php echo $cedula; ?>">
                <span class="help-block"><?php echo $cedula_err; ?></span>
    </div>
    <div class="form-group col-md-6">
      <label>Teléfono Móvil</label>
                <input type="tel" id="phone" name="telefono" id="tele" name="tele" class="form-control" placeholder="" value="<?php echo $telefono; ?>">
                <span class="help-block"><?php echo $telefono_err; ?></span>
    </div>

  <div class="form-group col-md-6 <?php echo (!empty($categoria_err)) ? 'has-error' : ''; ?>">
      
  
                
              <label for="">Categoria</label>
                                <select name="categoria" class="form-control" id="slt-categorias">
                                 

                                    <!--CATEGORIAS -->
                                  
                                 
                                </select>
                                <span class="help-block"><?php echo $categoria_err; ?></span>
    </div>



    <div class="form-group col-md-6 <?php echo (!empty($especialidad_err)) ? 'has-error' : ''; ?>">
      
  
                
              <label for="">Especilidad</label>
                                <select name="especialidad" class="form-control">
                                    <option value="">--Especialidad--</option>
                                    <option value="Naval">Naval</option>
                                    <option value="Infantemarina">Infante de Marina</option>
                                     <option value="aeronaval">Aeronaval</option>
                                       <option value="guardacostas">Guardacostas</option>
                                        <option value="none">Ninguno</option>
                                </select>
    </div>
   
    <div class="form-group col-md-12">
      
  
               <label for="">Componente</label>
                                <select name="componente" class="form-control" id="slt-componentes">
                                   <!-- CARGAN AL SELECCIONAR UN COMPONENTE-->
                                </select>
                                <span class="help-block"><?php echo $componente_err; ?></span>
    </div>

    <div class="form-group col-md-6 ">
      <label for="">Grado</label>
                                <select name="grado" class="form-control" id="slt-grados">
                                     <!-- CARGAN AL SELECCIONAR UN GRADO -->
                                    
                                </select>
                                <span class="help-block"><?php echo $grado_err; ?></span>
    </div>

            <div class="form-group col-md-6">
              <label>Unidad</label>
                      
                      <select name="unidad" class="form-control" id="slt-unidades">
                                          <!-- UNIDADES -->
                                        
                                      
                      </select>
                      <span class="help-block"><?php echo $unidad_err; ?></span>

                      <!--Dato incognito-->
                      <input type="hidden" name="fuerza" class="form-control" value="fuerza">
            </div> 
    <div class="form-group col-md-12">
      <label>Pais</label>
              
                <input type="text" name="pais" class="form-control" value="<?php echo $pais; ?>">
                <span class="help-block"><?php echo $pais_err; ?></span>
            </div> 
            <div class="form-group col-md-12">
                
<div class="boton1">
    <label class="label-boto">df</label>
                <input type="submit" class="btn btn-primary" value="Registrarse">
                
            </div>

            </div>
 </form>
 <div class="form-group col-md-12 cuenta">
<p>¿Ya tienes una cuenta? <a class="amarillo" href="login.php">Ingresa aquí</a>.</p>
</div>
    </div>

    </div>





    <div class="componente">
     <div class="slide one"><img src="images/bag-4.png" /></div> 
    </div>



  </div>
 
</div>
   
  
<!-- Use as a jQuery plugin -->

<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script><script  src="js/index.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.js"></script>

<script src="build/js/intlTelInput-jquery.min.js"></script>

  <script>
    // jQuery 
$("#phone").intlTelInput({
  // options here
preferredCountries: ["co","gb" ],

nationalMode:true,



});
  </script>

<!-- FORM DINAMICO-->
<script>
  // SLT-CATEGORIAS
  $.ajax({
          url:"dbCategorias.php",
           type:"POST",
           data:'idCategoria=1'

         }).done(function(data){

               $("#slt-categorias").html(data);
  })   
  // SLT-UNIDADES
  $.ajax({
          url:"dbUnidades.php",
           type:"POST",
           data:'idUnidad=1'

         }).done(function(data){

               $("#slt-unidades").html(data);
  })   



  //COMPONENTES DINAMICOS
  $('#slt-categorias').on('change',function(){
    // desactivamos los grados
    $("#slt-grados").attr('disabled', 'disabled')

    var idCategoria=$("#slt-categorias").val();
    var url="dbComponentes.php";

         $.ajax({

           url:url,
           type:"POST",
           data:'idCategoria='+idCategoria

         }).done(function(data){

               $("#slt-componentes").html(data);
         })    
     });
  


  
  // GRADOS DINAMICOS
  $('#slt-componentes').on('change',function(){

    $("#slt-grados").removeAttr('disabled', 'disabled')

    var idComponente=$("#slt-componentes").val();
 
    var url="dbGrados.php";

         $.ajax({

           url:url,
           type:"POST",
           data:'idComponente='+idComponente

         }).done(function(data){

               $("#slt-grados").html(data);
         })    
     });

</script> 

</body>
</html>