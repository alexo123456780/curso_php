<?php

//Sistema de inventario simple


//declaracion de mi array


$papeleria = 
[

    ["nombre" => "lapiz" , "precio" => 10 , "stok" => 5],
    ["nombre" => "borrador" , "precio" => 5 , "stok" => 100],
    ["nombre" => "cuaderno", "precio" => 30 , "stok" => 200],
    ["nombre" => "plumon" , "precio" => 30000, "stok" => 4],
    ["nombre" => "Usb" , "precio" => 500 , "stok" => 2]


];



//funcion de agregar los productos (solo la funcion push)
function agregarProductos(&$papeleria,$nombre,$precio,$stok){

    $nuevoProducto = ["nombre" => $nombre , "precio" => $precio , "stok" => $stok];


    array_push($papeleria,$nuevoProducto);

    echo"Producto agregado exitosamente <br><br>";

};


// funcion para mostrar los productos
function mostrarProductos($papeleria){

    foreach($papeleria as $value){

        echo "Nombre: ".$value["nombre"]."/"."Precio:  ".$value["precio"]."/"."Stok:  ".$value["stok"]."<br><br>";

    }

};

//funcion para actualizar el stok
function actualizarStok(&$papeleria,$nombreProducto, $newStok){

    $nombreValidado = strtolower($nombreProducto);


    $indiceArray = array_search($nombreValidado,array_column($papeleria,"nombre"));


    try{

        if($indiceArray == false){

            throw new Exception("No se encuentra el producto en el inventario");
            
        }


        $papeleria[$indiceArray]["stok"] = $newStok;

        echo "Stok actualizado correctamente";

    }catch(Exception $e){

        echo "Error:  ".$e-> getMessage();
        return;

    }

}

//funcion para eliminar en este caso ocultar el producto
function eliminarProducto(&$papeleria,$nombreProducto,){

    $productoValidado = strtolower($nombreProducto);

    $productoIndice = array_search($productoValidado,array_column($papeleria,"nombre"));


    try{

        if($productoIndice == false){

            throw new Exception("No se encontro el producto en el invemtario");

        }

        
        $borrarProducto = array_filter($papeleria,fn($value) => $value["nombre"] != $productoValidado);

        echo "Producto borrado exitosamente";
        echo "<br><br>";

        foreach($borrarProducto as $clave){

            echo "Nombre: ".$clave["nombre"]."/"."Precio:  ".$clave["precio"]."/"."Stok:  ".$clave["stok"]."<br><br>";

        }



    }catch(Exception $e){

        echo "Error:  ".$e-> getMessage();
    
    }

}


//funcion de mostrar el mas caro
function mostrarmasCaro(&$papeleria){

    $busquedaPrecio = array_column($papeleria,"precio");


    $numeroMayor = max($busquedaPrecio);

    $productoCaro = null;

    foreach($papeleria as $key){

        if($key["precio"] == $numeroMayor){

            $productoCaro = $key;

        }

    }

    if($productoCaro){

        echo "El producto mas caro es:  ";

        echo "Nombre: ".$productoCaro["nombre"]."/"."Precio:  ".$productoCaro["precio"]."/"."Stok:  ".$productoCaro["stok"];

    }else{

        echo "Error: no se encuentra el producto";

    }

}







?>