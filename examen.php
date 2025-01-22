<?php

/*Seccion 1

const NOMBRE_APP = "Sistema de gestion";

$version = 1.0;


$versionDecimal = number_format($version,1);


var_dump($version);

echo "<br><br>";


echo "Bienvenido a ".NOMBRE_APP. " Version $versionDecimal";



echo "<br><br>";*/

/*Ejercicio 2



$radio = 7;

define("PI",3.14);


$calcularAreaC = function($radio){

   $radioCuadrado = pow($radio,2);
   
   $calcularArea = PI * $radioCuadrado;

   return $calcularArea;

    
};


echo "El area del circulo es de:  ".$calcularAreaC($radio);

echo "<br><br>";*/


/*Ejercicio 3

$numeros = [0,10,-90,-70,0,100,2,-10,7,8,-65];

$verificarNumeros = function($numeros){

    $numeroPositivo = [];
    $numeroNegativo = [];
    $numeroNulo = [];


    for($i = 0 ; $i < count($numeros); $i++){

        if($numeros[$i] > 0){

            array_push($numeroPositivo,$numeros[$i]);    

        }elseif($numeros[$i] < 0){

            array_push($numeroNegativo,$numeros[$i]);
        }else{

            array_push($numeroNulo,$numeros[$i]);
        }
    };

    echo "Numeros positivos:  ".implode(" / ",$numeroPositivo);
    echo "<br><br>";
    echo "Numeros negativos:  ".implode(" / ",$numeroNegativo);
    echo "<br><br>";
    echo "Numeros nulos:  ".implode(" / ",$numeroNulo);

};

$verificarNumeros($numeros);*/


/*
for($i = 1 ; $i <= 10 ; $i++){

    $validacion = $i % 3 == 0 ? "Fizz" : $i;

    $stringValidado = strval($validacion); // strval convierte un entero a un string


    $arrayValidacion = explode(" , ",$stringValidado);

    echo implode("  /  ",$arrayValidacion). "<br><br>";
    
}*/


$contador = 1;

$suma = 0;

while($contador <=50){

    $suma += $contador;
    $contador++;


}

echo "La suma de los numeros es: $suma";













?>