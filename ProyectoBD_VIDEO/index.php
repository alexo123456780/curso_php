<?php

require "conexion.php";

$beta = $conexion->query("SELECT * FROM alumno");

$alumnos = $beta->fetchAll(PDO:: FETCH_OBJ);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de alumnos</title>
    <link rel="stylesheet" href="bd.css">
</head>
<body>


<header>
<h2>Listado de alumnos</h2>
</header>


<div>

<table border="2">

<tr>

<td>Codigo</td>
<td>Apellido Paterno</td>
<td>Apellido Materno</td>
<td>Nombre</td>
<td>Examen Parcial</td>
<td>Examen Final</td>
<td>Promedio</td>
<td>Editar</td>
<td>Eliminar</td>


</tr>




<?php   
foreach($alumnos as $key){
?>
<tr>
<td><?= $key->id_alumno?></td>
<td><?= $key->ap_paterno?></td>
<td><?= $key->ap_materno?></td>
<td><?= $key->nombre?></td>
<td><?= $key->ex_parcial?></td>
<td><?= $key->ex_final?></td>
<td><?= ($key -> ex_parcial + $key ->ex_final) / 2?></td>
<td><a href="editar.php?id=<?= $key->id_alumno ?>">Editar</a></td>
<td><a href="eliminar.php?id=<?= $key->id_alumno ?>">Eliminar</a></td>

</tr>

<?php

}

?>
</table>

</div class="tabla">


<h3>Registrar Alumno</h3>

<form action="registrar.php" method="post">

<div>
<table border="2">

<tr>
    <td>Apellido Paterno
        <input type="text" name="apellido-p" required>
    </td>

    <td>Apellido Materno
        <input type="text" name="apellido-m" required>
    </td>

    <td>Nombre
        <input type="text" name="nombre" required>
    </td>

    <td>Calificacion Parcial
        <input type="number" name="examen-parcial" required>
    </td>

    <td>Calificacion Final
        <input type="number" name="examen-final" required>
    </td>


</tr>

</table>

<input type="hidden" name="id" value="1">
<button type="submit">Registrar</button>

</div>





</form>












    
</body>
</html>