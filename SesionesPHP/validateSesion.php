<?php

session_start();

//Datos de ejemplo

$correoValido = "alexo123@gmail.com";

$contrasenaValida = "123456";

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $correo = $_POST["email"];
    $password = $_POST["password"];

    if($correo === $correoValido && $password === $password){


        //se guarda el usuario en la sesion
        $_SESSION["usuario"] = $correo;

        //Si el usurio marco recordame en el cookie

        if(isset($_POST["recordame"])){

            setcookie("usuario",$correo,time()+ 3600, "/");

        }

        header("Location: perfil.php");
        exit();

    }else{

        header("Location: login.php? =error_algo_salio_mal");
        exit();
    }

}




?>