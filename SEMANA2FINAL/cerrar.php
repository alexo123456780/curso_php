<?php

require "conexion1.php";

session_start();
session_destroy();


//destruir cookies


setcookie("usuario","",time() - 3600 , "/");





header("Location: registro.php");
exit();



?>