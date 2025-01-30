1. ¿Qué hace array_column?

La función array_column toma un array multidimensional (como un array de arrays) y extrae todos los valores de una columna específica.
Ejemplo básico:

$papeleria = [
    ["nombre" => "lapiz", "stok" => 50],
    ["nombre" => "pluma", "stok" => 30],
    ["nombre" => "cuaderno", "stok" => 20]
];

// Usamos array_column para obtener todos los nombres
$nombres = array_column($papeleria, 'nombre');

print_r($nombres);





2. ¿Qué hace array_search?

La función array_search busca un valor en un array y devuelve la posición del índice donde lo encuentra. Si no lo encuentra, devuelve false.
Ejemplo básico:

$nombres = ["lapiz", "pluma", "cuaderno"];

// Buscamos la posición del valor "pluma"
$indice = array_search("pluma", $nombres);

echo $indice; // Resultado: 1

Si intentas buscar algo que no existe:

$indice = array_search("borrador", $nombres);

var_dump($indice); // Resultado: bool(false)



// Dato: usa la funcion max para buscar en caso de un array multidimensional 



in_array es una función utilizada en varios lenguajes de programación (principalmente en PHP) para verificar si un valor específico existe dentro de un arreglo.