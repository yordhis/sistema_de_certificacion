<?php 
// Include config file
require_once "config.php";
$estatus = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $url = $_POST['url_1'] ?? " "; 
    $titulo = $_POST['titulo'] ?? "SIN TITULO"; 
    $descripcion = $_POST['descripcion'] ?? "SIN DESCRIPCION"; 

    if ($url != null) {
        $estatus = true;
    }
}

 // Check input errors before inserting in database
if($estatus){
        
    // Prepare an insert statement
    $sql = "INSERT INTO urls (url, titulo, descripcion) VALUES (?,?,?)";
     
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "sss", $url_live, $titulo_live, $descripcion_live);
        
        // Set parameters
        $url_live = $url; 
        $titulo_live = $titulo; 
        $descripcion_live = $descripcion; 
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Redirect 
            header("location: previa_directos.php");
        } else{
            echo "Algo salió mal, por favor inténtalo de nuevo.". mysqli_error($link);
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
}else {
   // Redirect 
   header("location: panel_admin.php");
}

// Close connection
mysqli_close($link);

