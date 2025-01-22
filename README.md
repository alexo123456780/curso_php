Practicas de PHP

-Ejercicios
-Practicas
-Proyectos


Parte 1: Funciones avanzadas de cadenas
1. explode() y implode()
explode(): Divide una cadena en un array basado en un delimitador.
implode(): Combina los elementos de un array en una cadena.
Ejemplo:

php
Copiar
Editar
$cadena = "PHP,JavaScript,Python";
$array = explode(",", $cadena); // Divide en un array
print_r($array);

$cadenaNueva = implode(" | ", $array); // Une el array en una cadena
echo $cadenaNueva;
👉 Tarea: Toma una cadena con 5 palabras separadas por comas, conviértela en un array, invierte el orden y luego conviértelo de nuevo a cadena.

2. str_replace() y str_ireplace()
str_replace(): Reemplaza texto dentro de una cadena (sensible a mayúsculas).
str_ireplace(): Igual que str_replace(), pero insensible a mayúsculas.
Ejemplo:

php
Copiar
Editar
$texto = "Hola, mundo";
$nuevoTexto = str_replace("mundo", "PHP", $texto);
echo $nuevoTexto; // Resultado: Hola, PHP
👉 Tarea: Reemplaza todas las vocales en una cadena por asteriscos (*) usando str_replace().

3. strpos() y strrpos()
strpos(): Encuentra la posición de la primera aparición de una subcadena.
strrpos(): Encuentra la posición de la última aparición.
Ejemplo:

php
Copiar
Editar
$cadena = "Bienvenido a PHP, el mejor lenguaje de programación: PHP.";
echo strpos($cadena, "PHP");  // Resultado: 12
echo strrpos($cadena, "PHP"); // Resultado: 50
👉 Tarea: Verifica si una palabra específica está presente en una cadena y muestra su posición (si existe).

Parte 2: Funciones adicionales para arrays
1. array_keys() y array_values()
array_keys(): Obtiene todas las claves de un array.
array_values(): Obtiene todos los valores de un array.
Ejemplo:

php
Copiar
Editar
$datos = ["nombre" => "Alejandro", "edad" => 30, "ocupacion" => "Desarrollador"];
$claves = array_keys($datos);
$valores = array_values($datos);
print_r($claves);
print_r($valores);
👉 Tarea: Dado un array asociativo con tres elementos, muestra solo sus claves y luego solo sus valores.

2. array_unique()
Elimina elementos duplicados en un array.
Ejemplo:

php
Copiar
Editar
$numeros = [1, 2, 2, 3, 4, 4, 5];
$unicos = array_unique($numeros);
print_r($unicos); // Resultado: [1, 2, 3, 4, 5]
👉 Tarea: Dado un array con números duplicados, elimina los duplicados y muestra el resultado.





