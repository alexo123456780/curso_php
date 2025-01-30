<?php

if(isset($_FILES["archivo"])){

    $nombreArchivo = $_FILES["archivo"]["name"];

    $extension = pathinfo($nombreArchivo,PATHINFO_EXTENSION);

    $archivosPermitidos = ["image/png","image/jpg","image/jpeg"];

    $tamanoMaximo = 2 * 1024 * 1024;

    $nombreNuevo = uniqid(). ".".$extension;

    $rutaCarpeta = "C:\\xampp\\htdocs\\curso_php\\Images";

    $rutaCompleta = $rutaCarpeta.$nombreNuevo;

    

    if($_FILES["archivo"]["error"] !== 0){
        header("Location: server.php?error=archivo_no_valido");
        exit;
    }

    if(!in_array($_FILES["archivo"]["type"],$archivosPermitidos)){

        header("Location: server.php? error= tipo_archivo_no_valido_xd");
        exit();

    }else if($_FILES["archivo"]["size"] > $tamanoMaximo){

        header("Location: server.php? error= formato_grande_no_valido_rodri_negro");
        exit();

    }

    //verifica si exite la ruta de la carpeta, si no crea un carpeta.

    if(!is_dir($rutaCarpeta)){

        mkdir($rutaCarpeta,0777,true);
    }

    //Verifica que se ha movido ala carpeta si no lanza un error

    if(move_uploaded_file($_FILES["archivo"]["tmp_name"],$rutaCompleta)){

        header("Location: galeria.php");
        exit();
    }else{

        header("Location: server.php? error= error_xd");
        exit();

    }

    
  
}



?>