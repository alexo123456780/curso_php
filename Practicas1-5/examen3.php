<?php

/*Task1

$estudiante = 
[
    "   Nombre" => "Alex" , "Edad" => 20 , "Curso" => "Dsm" , "Nota" => 10

];

foreach($estudiante as $key => $valor){

    echo "$key:  ".$valor."<br><br>";

}*/



/*Task2
$numeros = [10,20,30,40,50];


function funcionArray($numeros){


    return array_map(fn($elemento) => $elemento * 2 ,$numeros);

}

function obtenerNumero($numeros){


    return array_filter($numeros,fn($elemento) => $elemento > 25);

}

echo "Numeros mayores a 25 son :  ".implode(" - ",obtenerNumero($numeros));*/


//Task 3

$productos = 
[
    "producto1" => ["nombre" => "licuadora" , "precio" => 500 , "stok" => 4],

    "producto2" => ["nombre" => "lavadora" , "precio" => 10000, "stok" => 7],

    "producto3" => ["nombre" => "laptop" , "precio" => 30000, "stok" => 10]

];

function incrementarPrecios($productos){

    $incremento = array_map(function($elemento){

        $elemento["precio"] += $elemento["precio"] * 0.1;

        return $elemento;

    },$productos);

    echo "Array Actualizado:";
    echo "<br><br>";

    foreach($incremento as $key => $valor){

        echo "Nombre:  ".$valor["nombre"]." Precio:  ".$valor["precio"]."  Stock:  ".$valor["stok"]."<br><br>";

    }

}


function filtrarStok($productos){

    $filtrado = array_filter($productos,function($value){

        if($value["stok"] > 5){

            return $value;

        }
    });

    echo "Array Actualizado:";
    echo "<br><br>";


    foreach($filtrado as $candado => $indicador){

        echo "Nombre: ".$indicador["nombre"]."     Precio:  ".$indicador["precio"]."     Stok:  ".$indicador["stok"]. "<br><br>";

    }

}


function sumarStok($productos){

    return array_reduce($productos,fn($a,$b) => $a + $b["stok"],0);

}

incrementarPrecios($productos);

echo "<br><br>";

filtrarStok($productos);

echo "<br><br>";


echo "Hay en el stok la cantidad de:  ".sumarStok($productos)." productos";



?>