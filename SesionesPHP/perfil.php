<?php

session_start();

if(!isset($_SESSION["usuario"])){

    header("Location: login.php");
    exit();
}


echo "Bienvenido: ".$_SESSION["usuario"];

echo "<a href= 'logouth.php'> Cerrar Sesion </a>";


?>