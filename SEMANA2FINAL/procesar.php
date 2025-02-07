<?php


//Validacion del registro del usuario

require  "conexion1.php";

if($_SERVER["REQUEST_METHOD"]=== "POST"){

    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $password = $_POST["password"];



    if(isset($_FILES["foto"])){

    $nombreFoto = $_FILES["foto"]["name"];

    $extensionFoto = pathinfo($nombreFoto,PATHINFO_EXTENSION);

    $nombreNuevo = uniqid().".".$extensionFoto;


    
    //solucione el problema de que no se subia en la carpeta requerida con \\ al final del directorio    
    $directorio = "C:\\xampp\\htdocs\\curso_php\\SEMANA2FINAL\\uploads\\";

    $rutaCompleta = $directorio .$nombreNuevo;


    $formatosPermitidos = ["png","jpeg","jpg"];

    if(!in_array($extensionFoto,$formatosPermitidos)){

        die("Tipos de archivos no permitidos");
    }




    if(move_uploaded_file($_FILES["foto"]["tmp_name"],$rutaCompleta)){


     //hasheo de password mas seguriidad en la bd

    $passwordSeguro = password_hash($password,PASSWORD_DEFAULT);

    
    if(empty($nombre)|| empty($correo) || empty($passwordSeguro)){

        header("Location: procesar.php?=error_datos_vacios");
        exit();
    }


    $insertarDatos = $conexion1->prepare("INSERT INTO usuarios (nombre,email,password,foto_perfil) VALUES (:nombre,:correo,:password,:foto_perfil)");


    $insertarDatos->bindParam(":nombre",$nombre);
    $insertarDatos->bindParam(":correo",$correo);
    $insertarDatos->bindParam(":password",$passwordSeguro);
    $insertarDatos->bindParam(":foto_perfil",$nombreNuevo);



    if($insertarDatos->execute()){

        header("Location: login.php?=succes_usuario_registrado");
        exit();
    }else{

        header("Location: registro.php?=error_usuario_no_guardado");
        exit();

    }



    }



    }



}




?>