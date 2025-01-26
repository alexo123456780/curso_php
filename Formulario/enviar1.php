<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $nombre = trim(filter_var($_POST["nombre"],FILTER_SANITIZE_STRING));
    $email = trim(filter_var($_POST["email"],FILTER_SANITIZE_EMAIL)); 
    $texto = trim(filter_var($_POST["mensaje"],FILTER_SANITIZE_STRING));

    if(empty($nombre)){

        //rederigir a un archivo en especifico

        header("Location: formulario1.php? error= nombre_invalido");
        exit();

    }


    if(empty($email)){

        header("Location: formulario1.php? error= email_invalido");
        exit();
    }


    if(filter_var($email,FILTER_VALIDATE_EMAIL)){

        echo "Datos Ingresados correctamente <br><br>";

        echo "Nombre: $nombre <br><br>";
        echo "Email: $email <br><br>";
        echo "Mensaje: $texto";

    }

   
}





?>