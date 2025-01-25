<?php

//Sistema de inventario simple


$papeleria = 
[

    ["nombre" => "lapiz" , "precio" => 10 , "stok" => 5],
    ["nombre" => "borrador" , "precio" => 5 , "stok" => 100],
    ["nombre" => "cuaderno", "precio" => 30 , "stok" => 200],
    ["nombre" => "plumon" , "precio" => 30, "stok" => 4],
    ["nombre" => "Usb" , "precio" => 500 , "stok" => 2]


];


function agregarProductos(&$papeleria,$nombre,$precio,$stok){

    $nuevoProducto = ["nombre" => $nombre , "precio" => $precio , "stok" => $stok];


    array_push($papeleria,$nuevoProducto);

    echo"Producto agregado exitosamente <br><br>";

};

function mostrarProductos($papeleria){

    foreach($papeleria as $value){

        echo "Nombre: ".$value["nombre"]."/"."Precio:  ".$value["precio"]."/"."Stok:  ".$value["stok"]."<br><br>";

    }

};



agregarProductos($papeleria,"cable usb" , 200, 5);
agregarProductos($papeleria,"auriculares", 50, 3);

 mostrarProductos($papeleria);














?>