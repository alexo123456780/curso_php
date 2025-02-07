
<?php
session_start();

if(isset($_SESSION["usuario"])){
    header("Location: perfil.php");
    exit();
}

if(isset($_COOKIE["usuario"])){
    $_SESSION["usuario"] = json_encode($_COOKIE["usuario"],true);
    header("Location: perfil.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h3>Inicia Sesion</h3>
        <form action="procesarlogin.php" method="post">
            <div class="form-group">
                <label for="correo">Correo electrónico</label>
                <input type="email" name="correo" id="correo" required>
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" required>
            </div>

            <div class="remember-me">
                <input type="checkbox" name="cookies" id="cookies">
                <label for="cookies">Recordar usuario</label>
            </div>

            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>
</body>
</html>
<