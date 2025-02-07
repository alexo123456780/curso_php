<?php
require "conexion.php";
$conexion = $pdo->query("SELECT * FROM usuarios");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver</title>
</head>
<body>

<h2>Ver Usuarios</h2>

<?php  if($conexion->rowCount() > 0):?>

<table border="1.5">

<tr>

<th>ID</th>
<th>Nombre</th>
<th>Email</th>
</tr>

<?php  while($row = $conexion->fetch(PDO::FETCH_ASSOC)):?>

<tr>

<td><?= $row["id"]?></td>
<td><?= htmlspecialchars($row["nombre"])?></td>
<td><?= htmlspecialchars($row["email"])?></td>
</tr>

<?php endwhile; ?>
 
</table>

<? else: ?>
<p>No hay usuarios en la base de datos</p>

<?php endif; ?>


<br><br>

<a href="index.php">Volver</a>








    
</body>
</html>