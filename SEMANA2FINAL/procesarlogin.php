<?php

//Se inicia la sesion si o si

session_start();

require "conexion1.php";

if($_SERVER["REQUEST_METHOD"]=== "POST"){

    $correo = $_POST["correo"];
    $password = $_POST["password"];


    //Traigo todos los datos necesarios del usuario

    $consulta = $conexion1->prepare("SELECT id,nombre,email,password,foto_perfil FROM usuarios WHERE email = :email");

    //Ejecuta la consulta y agrega el parameyto

    $consulta->bindParam(":email",$correo);


    $consulta->execute();


    //Traigo la consulta en  un array asociativo


    $usuario = $consulta->fetch(PDO::FETCH_ASSOC);


    //Verofico que exista el usuario  en el array


    if($usuario && password_verify($password,$usuario["password"])){

        $_SESSION["usuario"] =
         [
            "id" => $usuario["id"],
            "nombre" => $usuario["nombre"],
            "email" => $usuario["email"],
            "password" => $usuario["password"],
            "foto_perfil" => $usuario["foto_perfil"]

         ];


         if(isset($_POST["cookies"])){

            setcookie("usuario", json_encode($_SESSION["usuario"]), time() + (8640 * 300), "/");

         }

         header("Location: perfil.php?=Welcome");


    }else{

        header("Location: registro.php?=error_usuario_no_encontrado");
    }
}








?>