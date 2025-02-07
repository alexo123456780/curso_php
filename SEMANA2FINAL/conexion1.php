<?php

$host= "localhost";
$dbname = "gestion_usuarios";
$userName = "root";
$password = "";



try{

    $conexion1 = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$userName,$password);

    $conexion1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


}catch(PDOException $e){

    die("Error de conexion".$e->getMessage());
}







?>