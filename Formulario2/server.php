<?php

if($_SERVER['REQUEST_METHOD'] === "POST"){

    $nombreUsuario = trim(filter_var($_POST["name"],FILTER_SANITIZE_STRING));

    $edadUsuario = filter_var($_POST["age"],FILTER_SANITIZE_NUMBER_INT);
    
    $sexo = $_POST["sex"];

    $roles = $_POST["rol"];


    if(!filter_var($edadUsuario,FILTER_VALIDATE_INT)){

        header("Location: index.php? Error = edad_invalida");
        exit();

    }

    if(empty($nombreUsuario)){

        header("Location: index.php? Error = nombre_Invalido");
        exit();

    }

    $resultado = [];

    foreach($roles as $clave){

        array_push($resultado,$clave);

    }

    $resultadoString = implode(" - ",$resultado);



    echo "<h3>Usuario Encontrado</h3>";
    echo "<p>Nombre: $nombreUsuario</p>";
    echo "<p>Edad: $edadUsuario years old</p>";
    echo "<p>Sexo: $sexo</p>";
    echo "<p>Roles:</p><ul><li>$resultadoString</li></ul>";


    if(isset($_FILES["image"]) && $_FILES["image"]["error"] === UPLOAD_ERR_OK){

        $imagenes = $_FILES["image"];

        $folder = $_SERVER["DOCUMENT_ROOT"]. "/curso_php/Images";

        if(!is_dir($folder)){

            mkdir($folder,0777,true);

        }

        $patch = $folder . $imagenes["name"];

        if(move_uploaded_file($imagenes["tmp_name"],$patch)){

            echo "Archivo subido correctamente" .$imagenes["name"];



        }else{

            echo "Error al mover archivo";
        }

    }else{


        echo "No se subio  algun archivo por un error";
    }


    
    



}




?>