<?php

session_start();

if($_SERVER['REQUEST_METHOD'] === "POST"){

    $correo =   $_POST['correo'];
    $password = $_POST['password'];


    $users = 
    [
        ["nombre" => "Alex",'correo' => 'user1@example.com', 'password' => '123'],
        ["nombre" => "Juan", 'correo' => 'user2@example.com', 'password' => '456'],
        ["nombre" => "Pedro",'correo' => 'user3@example.com', 'password' => '789'],
        ["nombre" => "Maria",'correo' => 'user4@example.com', 'password' => '678']
    ];

    $indiceCorreo = array_search($correo,array_column($users,"correo"));

    $indicePassword = array_search($password,array_column($users,"password"));

    try{

        if($indiceCorreo === false || $indicePassword === false){

            throw new Exception("No se encontro el usuario");
        }

        
    }catch(Exception $e){

        echo "Warning: ".$e -> getMessage();
        return;
        
    }

        $nombre = $users[$indiceCorreo]["nombre"];

        $_SESSION["usuario"] = $nombre;

        if(isset($_POST["guardar"])){

            setcookie("usuario",$nombre,time()+ 3600, "/");
        }

    
        header("Location: perfilUser.php");
        exit();



}









?>