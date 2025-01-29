<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practicas-Formulario-YT</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h3><strong>Formulario de Contacto</strong></h3>



<!--  Se agrega multipart/form-data para aque acceda el form alos archivos   -->

<form action="server.php" method="post" id="formulario" enctype="multipart/form-data">

    <label>
    Nombre:
    <input type="text" name="name" id="name" placeholder="userName">
    </label>


    <label>
        Edad:
        <input type="number" name="age" id="age" placeholder="ageUser">
    </label>

    <br>

    <p>Sexo:</p>

    <label >
    <input type="radio" name="sex" value="masculino">
    Masculino
    </label>

    <label >
    <input type="radio" name="sex" value="femenino">
    Femenino
    </label>


    <br><br>

    <p>Roles:</p>

    <label >
    <input type="checkbox" name="rol[]" value="administrador">
    Administrador
    </label>

    <label >
    <input type="checkbox" name="rol[]" value="mecanico">
    Mecanico
    </label>

    <label >
    <input type="checkbox" name="rol[]" value="cliente">
    Cliente
    </label>

    <br><br><br>

    <label>
        Imagen:
        <input type="file" name="image" >
        
    </label>

    

    <br><br>
    <button type="submit">Enviar</button>


</form>








    
</body>
</html>