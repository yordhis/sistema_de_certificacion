<?php
require_once "config.php";
        // CONSULTA DE CATEGORIAS
        $sqlCategoria = "SELECT * FROM categorias ORDER BY id ASC";
        $stmtCategoria = mysqli_prepare($link, $sqlCategoria);
       
        mysqli_stmt_execute($stmtCategoria);
    
        // IMPRIMIMOS LAS OPCIONES DEL SELECT CATEGORIAS
        if(mysqli_stmt_bind_result($stmtCategoria, $id, $name)){
            echo '<option value="">Seleccione Categoria</option>';
            while (mysqli_stmt_fetch($stmtCategoria)) {
                
                echo '<option value="' . $id . '">' . $name . '</option>';
            }
        }else {
            echo '<option value="">--No hay Categorias--</option>';
        }
?>