<?php

if(!isset($_GET["id"])){

    header("Location: index.php?error=usuario_no_encontrado");
    exit();
}

require "conexion.php";

$id = $_GET["id"];


$eliminar = $conexion->prepare("DELETE FROM alumno WHERE id_alumno = :id ");

$eliminar->bindParam(":id",$id);

if($eliminar->execute()){

    header("Location: index.php?=alumno_eliminado");
    exit();
}else{

    header("Location: eliminar.php?error=usuario_no_eliminado");
    exit();
}


?>