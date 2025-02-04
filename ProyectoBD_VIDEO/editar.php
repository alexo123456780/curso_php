<?php

if(!isset($_GET["id"])){

    exit();
}


require "conexion.php";

$id = $_GET["id"];

//Se tienen que obtener los datos de la consulta antes de editarlos

//El prepare es para hacer consulta con parametros


$consulta = $conexion->prepare("SELECT * FROM alumno WHERE id_alumno = :id ");

$consulta->bindParam(":id",$id);

$consulta->execute();

$alumno = $consulta->fetch(PDO::FETCH_OBJ);


if($_SERVER["REQUEST_METHOD"] === "POST"){
    
    $id = $_GET["id"];
    $apellidoP = $_POST["apellido-p"];
    $apellidoM = $_POST["apellido-m"];
    $nombre = $_POST["nombre"];
    $caliParcial = $_POST["cali-parcial"];
    $caliFinal = $_POST["cali-final"];



    if(empty($apellidoP)|| empty($apellidoM) || empty($nombre)  || empty($caliParcial) || empty($caliFinal)){

        die("Error no se aceptan datos vacios");

    }



    $actualizar = $conexion->prepare("UPDATE alumno set ap_paterno = :ap_paterno , ap_materno = :ap_materno , nombre = :nombre , ex_parcial = :ex_parcial , ex_final = :ex_final  WHERE id_alumno = :id");

    $actualizar->bindParam(":ap_paterno",$apellidoP);
    $actualizar->bindParam(":ap_materno",$apellidoM);
    $actualizar->bindParam(":nombre",$nombre);
    $actualizar->bindParam(":ex_parcial",$caliParcial);
    $actualizar->bindParam(":ex_final",$caliFinal);
    $actualizar->bindParam(":id",$id);


    if($actualizar->execute()){

        header("Location: index.php?succes=actualizacion_correcta");
        exit();
    }else{

        header("Location: index.php?error=_alumno_no_editado");
        exit();

    }


}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="bd.css">
</head>
<body>

<h2>Editar Alumno</h2>




<form method="post">

<table border="2">

<tr>

<td>
Apellido Paterno:
<input type="text" name="apellido-p" value="<?= $alumno->ap_paterno?>" required>         
</td>


<td>
Apellido Materno:
<input type="text" name="apellido-m" value="<?= $alumno->ap_materno?>" required>
</td>

<td>
Nombre:
<input type="text" name="nombre" value="<?= $alumno->nombre?>" required>    
</td>


<td>

Calificacion Parcial:
<input type="number" name="cali-parcial"   value="<? $alumno->ex_parcial?>" required>    

</td>

<td>
Calificacion Final:
<input type="number" name="cali-final" value="<? $alumno-> ex_final?>" required>        
</td>



</tr>


</table>
<button type="submit">Guardar Cambios</button>




</form>



    
</body>
</html>
