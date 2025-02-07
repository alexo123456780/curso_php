<?php

require "conexion.php";

if($_SERVER["REQUEST_METHOD"] === "POST"){

    if(isset($_POST["editar"])){

        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];

        
        $conexion = $pdo->prepare("SELECT * FROM usuarios WHERE id = :nombre, :correo");
    
        $conexion->bindParam(":nombre",$nombre);
        $conexion->bindParam(":correo",$correo);
    
        if($conexion->execute()){
    
            header("Location: actualizar.php");
            exit();
        }else{
    
            echo "Usuario no encontrado";
        }
    
    




    }

   
}




?>