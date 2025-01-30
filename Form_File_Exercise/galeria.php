<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Styles2.css">
</head>
<body>

<header>

<h2>Galeria de Imagenes</h2>

</header>



<div class="galeria">

<?php
    $directorio = "C:\\xampp\\htdocs\\curso_php\\Images";

    if(is_dir($directorio)){
        $imagenes = array_diff(scandir($directorio), array(".", ".."));
        
        foreach ($imagenes as $imagen) {
            echo "<img src='" . $directorio . "/" . $imagen . "' alt='imagen' width='200'>";
        }
    } else {
        echo "<p>No hay imágenes disponibles.</p>";
    }

    ?>

</div>



    
</body>
</html>