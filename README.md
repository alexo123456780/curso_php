PHP INTRODUCCION (DIA 1-5)

PHP Fundamentals: Días 1 a 5
Introducción
Este documento reúne todo lo aprendido en PHP desde lo básico hasta arrays multidimensionales y sus operaciones avanzadas. Incluye explicaciones, ejemplos prácticos y ejercicios. Es ideal para usarlo como referencia rápida o guía de estudio.

Día 1: Introducción a PHP
Configuración del entorno
Herramientas necesarias:
Servidor local: XAMPP, WAMP o similares.
Editor de texto: Visual Studio Code o cualquier IDE de tu preferencia.
Primer script:


<?php
echo "¡Hola, mundo!";
?>
Conceptos básicos
Variables y constantes:

Variables: Se definen con $.
Ejemplo:


$nombre = "Alejandro";
$edad = 30;
Constantes: No cambian su valor.
Ejemplo:



define("PI", 3.1416);
const NOMBRE_APP = "MiApp";
Tipos de datos en PHP:

Escalares: int, float, string, bool.
Compuestos: array, object.
Especiales: null.
Operadores en PHP:

Aritméticos: +, -, *, /, %.
Comparación: ==, !=, >, <, <=, >=.
Lógicos: &&, ||, !.
Asignación: =, +=, -=, *=, /=, %=.
Ternario: $resultado = $condicion ? "Sí" : "No";
Día 2: Estructuras de Control
Condicionales
if, else, elseif:


$edad = 20;
if ($edad < 18) {
    echo "Eres menor de edad.";
} elseif ($edad <= 25) {
    echo "Eres joven.";
} else {
    echo "Eres adulto.";
}
switch:


$dia = "lunes";
switch ($dia) {
    case "lunes":
        echo "Inicio de semana.";
        break;
    case "viernes":
        echo "Fin de semana.";
        break;
    default:
        echo "Día regular.";
}
Bucles
for: Repite un bloque de código un número específico de veces.


for ($i = 1; $i <= 5; $i++) {
    echo "Número: $i<br>";
}
while: Ejecuta un bloque mientras la condición sea verdadera.


$i = 1;
while ($i <= 5) {
    echo "Número: $i<br>";
    $i++;
}
do-while: Similar a while, pero siempre ejecuta el bloque al menos una vez.


$i = 1;
do {
    echo "Número: $i<br>";
    $i++;
} while ($i <= 5);
foreach: Itera sobre arrays.


$lenguajes = ["PHP", "JavaScript", "Python"];
foreach ($lenguajes as $lenguaje) {
    echo "Lenguaje: $lenguaje<br>";
}


Día 3: Funciones
Definición y uso
Funciones simples:


function saludar($nombre) {
    return "Hola, $nombre!";
}
echo saludar("Alejandro");
Funciones dinámicas:


function sumar($a, $b) {
    return $a + $b;
}
$operacion = "sumar";
echo $operacion(5, 3);
Funciones anónimas:


$multiplicar = function($a, $b) {
    return $a * $b;
};
echo $multiplicar(4, 5);
Funciones flecha:
Introducidas en PHP 7.4, son una forma más corta de escribir funciones anónimas.


$restar = fn($a, $b) => $a - $b;
echo $restar(10, 5);
Día 4: Manipulación de cadenas y arrays
Strings
Funciones clave:
strlen(): Devuelve la longitud de una cadena.
strtolower(), strtoupper(): Convierte a minúsculas o mayúsculas.
substr(): Extrae una parte de la cadena.
str_replace(): Reemplaza un texto en una cadena.

$texto = "Hola, mundo";
echo str_replace("mundo", "PHP", $texto); // Hola, PHP
Arrays
Tipos de arrays:

Indexados:

$frutas = ["Manzana", "Pera", "Uva"];
Asociativos:

$usuario = ["nombre" => "Alejandro", "edad" => 30];
Multidimensionales:

$productos = [
    ["nombre" => "Laptop", "precio" => 1500],
    ["nombre" => "Smartphone", "precio" => 800]
];
Funciones clave:

array_map(): Aplica una función a cada elemento.
array_filter(): Filtra elementos de acuerdo con una condición.
array_reduce(): Reduce el array a un solo valor.
Día 5: Arrays Multidimensionales
Definición y manipulación
Acceso a datos:


$productos[0]["nombre"]; // Laptop
Operaciones avanzadas:

Incremento de precios:


$productos = array_map(function($producto) {
    $producto["precio"] *= 1.1;
    return $producto;
}, $productos);
Filtrar por stock:


$stockAlto = array_filter($productos, fn($p) => $p["stock"] > 20);
Calcular suma total de stock:


$totalStock = array_reduce($productos, fn($total, $p) => $total + $p["stock"], 0);













