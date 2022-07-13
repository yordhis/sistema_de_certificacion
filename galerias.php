<?php
require_once "config.php";
        // CONSULTA DE CATEGORIAS
        $sql = "SELECT * FROM galerias ORDER BY id DESC";
        $stmt = mysqli_prepare($link, $sql);
       
        mysqli_stmt_execute($stmt);
    
        // IMPRIMIMOS LAS OPCIONES DEL SELECT S
        if(mysqli_stmt_bind_result($stmt, $id, $titulo, $descripcion, $iframe_code, $date)){
            $galerias = [];
            while (mysqli_stmt_fetch($stmt)) {
               $galerias[] = [
                   "id"=>$id, 
                   "titulo"=>$titulo, 
                   "descripcion"=>$descripcion, 
                   "iframe_code"=>$iframe_code, 
                   "date"=>$date, 
                ];
                
            }
            return $galerias;
        }else {
            echo '--No hay Galeria--';
        }
?>