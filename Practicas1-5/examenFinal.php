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
function mostrarProductos(&$papeleria){

    foreach($papeleria as $value){

        echo "Nombre: ".$value["nombre"]."/"."Precio:  ".$value["precio"]."/"."Stok:  ".$value["stok"]."<br><br>";

    }

};

//funcion para actualizar el stok
function actualizarStok(&$papeleria,$nombreProducto, $newStok){

    $nombreValidado = strtolower($nombreProducto);


    $indiceArray = array_search($nombreValidado,array_column($papeleria,"nombre"));


    try{

        if($indiceArray === false){

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

        if($productoIndice === false){

            throw new Exception("No se encontro el producto en el invemtario");

        }

        
        $papeleria = array_filter($papeleria,fn($value) => $value["nombre"] != $productoValidado); // aca reasigno un valor.

        echo "Producto borrado exitosamente";
        echo "<br><br>";

        foreach($papeleria as $clave){

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


function sumarStok(&$papeleria){

    $sumarProductos = array_reduce($papeleria,fn($a,$b) => $a + $b["stok"],0);

    echo "El total de productos en stok es de: $sumarProductos";

}


function actualizar($opcion,&$papeleria){ //me faltaba el array por referencia y lo agregue &

$opcionRevisada = strtolower($opcion);


switch($opcionRevisada){

    case "agregar":
    agregarProductos($papeleria,"celular",15000,2);
    break;
    
    case "ver":
    mostrarProductos($papeleria);
    break;
    
    case "actualizar":
    actualizarStok($papeleria,"borrador",9);
    break;
    
    case "eliminar":
    eliminarProducto($papeleria,"borrador");
    break;
    
    case "caro":
    mostrarmasCaro($papeleria);
    break;
    
    case "total":
    sumarStok($papeleria);
    break;
    
    default:
    echo "Opcion no valida";
    break;

}

}


actualizar("ver",$papeleria);
actualizar("agregar",$papeleria);

actualizar("total",$papeleria);

echo "<br><br>";

actualizar("caro",$papeleria);















?>