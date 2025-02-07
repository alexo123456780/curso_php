<?php

$host = "localhost";
$dbname = "notas";
$userName = "root";
$password = "";

try{

    $conexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$userName,$password);

    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO:: ERRMODE_EXCEPTION);


}catch(PDOException $e){

    die("Error, no se establecio la conexion ala base de datos".$e->getMessage());

}



















?>