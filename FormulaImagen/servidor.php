<?php
//Cuando el usuario sube un archivo, PHP lo recibe en $_FILES.

//Siempre hay validar los archivos antes de guardarlos

$archivosPermitidos = ["image/jpeg", "image/png"];

 /*$tamanoMaximo = 2 * 1024 * 1024;*/


//validar si se subio un archivo
if($_FILES["archivo"]["error"] != 0){

    die("Error al subir archio");
}




//Validar el tamano
/*
if($_FILES["archivo"]["size"] > $tamanoMaximo){

    die("El archivo ha excedido los 2 mb");
}*/




//Validar los tipos de archivos que se puden subir
if(!in_array($_FILES["archivo"]["type"], $archivosPermitidos)){

    header("Location: servidor.php? error= tipo_archivo_no_permitido");
    exit();

}



//Renombrar el archivo para evitar duplicados

$nombreOriginal = $_FILES["archivo"]["name"];


//obtenenemos la extension del archivo o sea el tipo de archivo que es
$extensionArchivo = pathinfo($nombreOriginal,PATHINFO_EXTENSION);



//Se le asigna un nombre nuevo

$nombreNuevo = uniqid().".".$extensionArchivo;



//Mover archivo a una carpeta desaado


//ruta de acceso doble barra con windows 

$carpetaDestino = "C:\\xampp\\htdocs\\curso_php\\Images";


$archivoDestino = $carpetaDestino. $nombreNuevo;


//Mover el archivo

if(move_uploaded_file($_FILES["archivo"]["tmp_name"],$archivoDestino)){

    
    echo "<p>Archivo ha sido movido con exito ala carpeta correctamente</p>";


}else{


    echo "<p>No se puedo subir el archivo correctamente</p>";
}
































?>