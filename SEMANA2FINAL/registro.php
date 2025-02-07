<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="hola11.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h2>Registro de Usuario</h2>
    </header>

    <div class="container">
        <form action="procesar.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>    
            </div>

            <div class="form-group">
                <label for="correo">Correo:</label>
                <input type="email" id="correo" name="correo" required>    
            </div>

            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>    
            </div>

            <div class="form-group checkbox-group">
                <label for="cookie">
                    <input type="checkbox" id="cookie" name="cookie">
                    Cookies
                </label>
            </div>

            <div class="form-group">
                <label for="foto" class="file-label">Foto de perfil:</label>
                <input type="file" id="foto" name="foto" required>
            </div>

            <button type="submit">Registrarse</button>

            <div class="login-link">
                ¿Ya tienes cuenta? <a href="login.php">Iniciar Sesión</a>
            </div>
        </form>
    </div>
</body>
</html>

