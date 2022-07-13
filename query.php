<?php

// con esta funcion podras obtener los nombres 
// de las categorias, componentes, unidades y grados
/**
 * @var tabla - Espesificamos a que tabla de la base de datos consultaremos
 * @var id - Espesificamos el id del elemento que deseamos obtener
 * 
 * Nota: esta funcion tiene el  require_once "config.php"; es decir que 
 * si hay otro fallara la consulta.
 * 
 * 
 */
function queryName($tabla, $id){

            require_once "config.php";
            // CONSULTA de datos
    
            $sql = "SELECT * FROM $tabla";
            $stmt = mysqli_prepare($link, $sql);
           
            mysqli_stmt_execute($stmt);
        
            // IMPRIMIMOS LAS OPCIONES DEL SELECT CATEGORIAS
            if(mysqli_stmt_bind_result($stmt, $id, $name)){
               $dato = "";
                while (mysqli_stmt_fetch($stmt)) {
                    
                   return $dato = $name;
                }
            }else {
                echo '--No hay Categorias--' .mysqli_errno($link);
            }
}


  


?>