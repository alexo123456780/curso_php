<?php

require "conexion.php";

//Datos del usuario 

$nombre = "Pepe";
$email = "Pepe123@gmail.com";


//Preparar la consulta

$stm = $conexion -> prepare("INSERT INTO usuarios (nombre,email) VALUES (:nombre , :email)");

//asocias los valores que tienes con la variable que ya agregaste

$stm -> bindParam(":nombre",$nombre);
$stm -> bindParam(":email",$email);


//Ejecutamos la consulta

if($stm -> execute()){

    echo "Usuario $nombre insertado correctamente";

}else{

    echo "Ocurrio un error al insertar el usuario";
}



?>