<?php

//Inicia la sesion del usuario
session_start();

//Si hay unsa sesion autenticada o activia redirigue al perfil.php

if(isset($_SESSION["usuario"])){

    header("Location: perfil.php");
    exit();
}

//Verificamos si hay una cookie 

if(isset($_COOKIE["usuario"])){

  $_SESSION["usuario"] = $_COOKIE["usuario"];
  header("Location: perfil.php");
  exit();  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>

<h2>Login Usuario</h2>


<form action="validateSesion.php" method="post">

<label>
  Email:
  <input type="email" name="email" required>
</label>

<label>
  Contraseña:
  <input type="password" name="password" required>
</label>

<br><br><br>

Recordar
<input type="checkbox" name="recordarme">

<br><br><br>

<input type="submit" value="Ingresar">

</form>






  
</body>
</html>