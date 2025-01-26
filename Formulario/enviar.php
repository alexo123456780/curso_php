<?php

//Verificamos si los datos se enviaron

//sanitizar los datos o validarlos

/*Ejemplo 1 basico
if($_SERVER["REQUEST_METHOD"] === "POST"){

    $nombre = $_POST["name"];
    $gmail = $_POST["email"];

    echo "Nombre: $nombre";
    echo "<br><br>";
    echo "Gmail: $gmail";

}*/


//Ejemplo 2 validacion y zanitacion

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $nombre = filter_var($_POST["name"],FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"],FILTER_SANITIZE_EMAIL);


    if(filter_var($email,FILTER_VALIDATE_EMAIL)){

        echo "Datos validos <br><br>";

        echo "Nombre: $nombre <br>";
        echo "Email: $email";

    }else{

        echo "Email incorrecto verifique de nuevo porfavor";
    }


}













?>