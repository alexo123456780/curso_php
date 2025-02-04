<?php
if(!isset($_POST["id"])){

    exit();

}

require "conexion.php";


if($_SERVER["REQUEST_METHOD"] === "POST"){

    $apellidoPaterno = $_POST["apellido-p"];
    $apellidoMaterno = $_POST["apellido-m"];
    $nombre = $_POST["nombre"];
    $caliParcial = $_POST["examen-parcial"];
    $caliFinal = $_POST["examen-final"];


    if(empty($apellidoPaterno) || empty($apellidoMaterno) || empty($nombre)|| empty($caliParcial) || empty($caliFinal)){

        header("Location: index.php?error=no_deje_espacios_vacios");
        exit();

    }


    $insertar = $conexion->prepare("INSERT INTO alumno (ap_paterno,ap_materno,nombre,ex_parcial,ex_final) VALUES (:ap_paterno,:ap_materno,:nombre,:ex_parcial,:ex_final)");


    $insertar->bindParam(":ap_paterno",$apellidoPaterno);
    $insertar->bindParam(":ap_materno",$apellidoMaterno);
    $insertar->bindParam(":nombre",$nombre);
    $insertar->bindParam(":ex_parcial",$caliParcial);
    $insertar->bindParam(":ex_final",$caliFinal);

    if($insertar->execute()){

        header("Location: index.php?success=alumno_registrado");
        exit();
    }else{

        header("Location: registrar.php?error=alumno_no_registrado");
        exit();

    }

}


?>