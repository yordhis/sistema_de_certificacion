<?php
require_once "config.php";
    // CONSULTA DE UNIDADES
    $sqlUnidad = "SELECT * FROM unidades ORDER BY id ASC";
    $stmtUnidad = mysqli_prepare($link, $sqlUnidad);
   
    mysqli_stmt_execute($stmtUnidad);

    // IMPRIMIMOS LAS OPCIONES DEL SELECT UnidadS
    if(mysqli_stmt_bind_result($stmtUnidad, $id, $name, $abrev)){
        echo '<option value="">Seleccione Unidad</option>';
        while (mysqli_stmt_fetch($stmtUnidad)) {
            
            echo '<option value="' . $id . '">' . $name . " ($abrev)" . '</option>';
        }
    }else {
        echo '<option value="0">¡No hay Unidades!</option>';
    }


?>