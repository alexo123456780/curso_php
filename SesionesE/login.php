<?php

session_start();

if(isset($_SESSION["usuario"])){

    header("Location: perfilUser.php");
    exit();
}

if(isset($_COOKIE["usuario"])){

    $_SESSION["usuario"] = $_COOKIE["usuario"];
    header("Location: perfilUser.php");
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
<h2>Login Usuario</h2>
</header>


<form action="validateLogin.php" method="post">

<label>
    Correo:
    <input type="email" name="correo" required>
</label>

<label>
    Contraseña:
    <input type="password" name="password" required>
</label>


Guardar Cookies: <input type="checkbox"  name="guardar">

<br><br><br>

<input type="submit" value="Ingresar">

</form>




    
</body>
</html>


