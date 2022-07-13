<?php
require_once "config.php";
        // CONSULTA DE CATEGORIAS
        $sql = "SELECT * FROM urls ORDER BY id DESC";
        $stmt = mysqli_prepare($link, $sql);
       
        mysqli_stmt_execute($stmt);
    
        // IMPRIMIMOS LAS OPCIONES DEL SELECT S
        if(mysqli_stmt_bind_result($stmt, $id, $url, $titulo, $descripcion)){
            $lives = [];
            while (mysqli_stmt_fetch($stmt)) {
               $lives[] = [
                   "id"=>$id, 
                   "url"=>$url, 
                   "titulo"=>$titulo, 
                   "descripcion"=>$descripcion, 
                ];
                
            }
            return $lives;
        }else {
            echo '--No hay LIVE--';
        }
?>