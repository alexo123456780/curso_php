<?php

require "conexion.php";

//Id del usuario a eliminar

$id = 1;

//Preparamos la consulta a eliminar

$stm = $conexion->prepare("DELETE FROM  usuarios WHERE id = :id");

$stm->bindParam(":id",$id);



if($stm-> execute()){

    echo "Usuario eliminado exitosamente";
}else{

    echo "Ocurrio un error al eliminar el usuario";
}



?>