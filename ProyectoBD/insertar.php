<?php

require "conexion.php";

if($_SERVER["REQUEST_METHOD"] === "POST"){

   $nombre = $_POST["nombre"];
   $email = $_POST["correo"];

   if(empty($nombre) || empty ($email)){

    header("Location: insertar.php? error= no_se_guardan_usuario_vacios");
    exit();

   }


   $conexion1 = $pdo->prepare("INSERT INTO usuarios (nombre,email) VALUES (:nombre,:email)");

   $conexion1->bindParam(":nombre",$nombre);
   $conexion1->bindParam(":email",$email);


   
   if($conexion1->execute()){

    header("Location: index.php? = user_save");
    exit();

   }else{

     header("Location: inserta.php? error= user_not_save");
     exit();

   }



}







?>