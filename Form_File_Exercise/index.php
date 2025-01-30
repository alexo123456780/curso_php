<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Styles.css">
</head>
<body>

<header>
<h1>Subir Imagenes</h1>
</header>




<form action="server.php" method="post" enctype="multipart/form-data">

<fieldset>
<legend>Formulario de subida</legend>    
<label for="subir">Sube tus imagenes:</label>
<input type="file" name="archivo" id="subir" class="input-file">


<br><br><br>

</fieldset>

<button type="submit">Enviar Imagenes</button>

</form>










    
</body>
</html>