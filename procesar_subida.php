<?php 
// Include config file
require_once "config.php";
$estatus = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $titulo = $_POST['titulo'] ?? "SIN TITULO"; 
    $descripcion = $_POST['descripcion'] ?? "SIN DESCRIPCION"; 
    $iframe = $_POST['iframe_code'] ?? " "; 

    if ($iframe != null) {
        $estatus = true;
    }
}

 // Check input errors before inserting in database
if($estatus){
        
    // Prepare an insert statement
    $sql = "INSERT INTO galerias (titulo, description, iframe_code) VALUES (?,?,?)";
     
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "sss", $titulo_galeria, $descripcion_galeria, $iframe_code);
        
        // Set parameters
        $titulo_galeria = $titulo; 
        $descripcion_galeria = $descripcion; 
        $iframe_code = $iframe; 
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Redirect 
            header("location: previa_galeria.php");
        } else{
            echo "Algo salió mal, por favor inténtalo de nuevo.". mysqli_error($link);
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
}else {
   // Redirect 
   header("location: subir_video.php");
}

// Close connection
mysqli_close($link);

