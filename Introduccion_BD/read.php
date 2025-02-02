<?php

require "conexion.php";


//consulta de la bd
$stm = $conexion-> query("SELECT * FROM usuarios");

while($row = $stm ->fetch(PDO::FETCH_ASSOC)){

    echo "Id: ".$row["id"]."<br>";
    echo "Nombre: ". $row["nombre"]."<br>";
    echo "Email: ".$row["email"]."<br>";
}

?>