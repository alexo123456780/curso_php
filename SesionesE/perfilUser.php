<?php

session_start();

if(!isset($_SESSION["usuario"])){

    header("Location: login.php");
    exit();

}

echo "Bienvenido(a): ".$_SESSION["usuario"];

echo "<br><br><br>";

?>

<a href="logout.php">Cerrar Sesion</a>