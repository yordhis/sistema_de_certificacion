<?php
require_once "config.php";

    // RECIBIENDO EL ID DE LA CATEGORIA
    $idComponente = intval($_REQUEST['idComponente']) ?? false;
  
    
    if ($idComponente) {
        // CONSULTA DE COMPONENTES
        $sqlGrado= "SELECT * FROM grados WHERE id_componente = '".$idComponente."' ORDER BY id ASC";
        $stmtGrado = mysqli_prepare($link, $sqlGrado);
       
        mysqli_stmt_execute($stmtGrado);
        echo '<option value="">Seleccione Grado</option>';
        if(mysqli_stmt_bind_result($stmtGrado, $id, $name, $abrev, $idComponente)){
    
            while (mysqli_stmt_fetch($stmtGrado)) {
                
                echo '<option value="' . $id . '">' . $name ." ($abrev)". '</option>';
            }
        }else {
            echo '<option value="">No hay Grados</option>' ;
        }
    }else {
       
        echo  '<option value="">'. "--No hay Grados--". '</option>';
    }

    mysqli_close($link);
?>