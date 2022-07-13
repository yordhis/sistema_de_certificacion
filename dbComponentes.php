<?php
require_once "config.php";
    // RECIBIENDO EL ID DE LA CATEGORIA
    $idCategoria = intval($_REQUEST['idCategoria']) ?? false;
  
    
    if ($idCategoria) {
        // CONSULTA DE COMPONENTES
        $sqlComponente = "SELECT * FROM componentes WHERE id_categoria = '".$idCategoria."' ORDER BY id ASC";
        $stmtComponente = mysqli_prepare($link, $sqlComponente);
       
        mysqli_stmt_execute($stmtComponente);
        echo '<option value="">Seleccione Componente</option>';
        if(mysqli_stmt_bind_result($stmtComponente, $id, $name, $idCategoria)){
    
            while (mysqli_stmt_fetch($stmtComponente)) {
                
                echo '<option value="' . $id . '">' . $name . '</option>';
            }
        }else {
            echo '<option value="">No hay Componentes</option>' ;
        }
    }else {
       
        echo  '<option value="">'. "--No hay Componentes--". '</option>';
    }

    mysqli_close($link);
?>