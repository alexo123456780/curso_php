<?php

$host = "localhost";
$dbname = "curso2_php";
$userName = "root";
$password = "";



try{

    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$userName,$password);

    $pdo-> setAttribute(PDO:: ATTR_ERRMODE , PDO:: ERRMODE_EXCEPTION);



}catch(PDOException $e){

    die("Error al conectar la base de datos ". $e ->getMessage());

}


?>