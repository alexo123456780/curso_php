<?php

session_start();


if(!isset($_SESSION["usuario"])){

    header("Location: registro.php?error=usuario_not_found");
    exit();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="perfil.css">
</head>
<body>
    <div class="perfil-container">
        <h3>Inicio de Sesión</h3>
        <h3>Bienvenido <?= htmlspecialchars($_SESSION["usuario"]["nombre"]) ?></h3>
        
        <img src="uploads/<?= $_SESSION["usuario"]["foto_perfil"] ?>" alt="Foto-Perfil" width="150">
        
        <div class="correo">
            <h3>Correo: <?=  htmlspecialchars($_SESSION["usuario"]["email"]) ?></h3>
        </div>
        
        <a href="cerrar.php">Cerrar Sesión</a>
    </div>
</body>

</html>