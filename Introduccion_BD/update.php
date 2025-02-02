<?php

require "conexion.php";

$id = 1;

$nombre_nuevo = "Juan";

//Preparar la consulta

$stm = $conexion-> prepare("UPDATE usuarios SET nombre = :nombre WHERE id = :id");

$stm-> bindParam(":nombre" , $nombre_nuevo);
$stm -> bindParam(":id" , $id);

if($stm ->execute()){

    echo "Usuario actualizado correctamente";
}else{

    echo "Error:Usuario no actualizado";
}


?>