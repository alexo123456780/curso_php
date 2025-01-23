<?php

/*Cadenas de texto

//Obtener la longitud de una cadena

echo strlen("Hola mundo");

//Remplazar una cadena de texto

echo str_replace("Hello","PHP","Hello Brother")*/


$convertirMinisculas = function($texto){

    $textoMiniscula = strtolower($texto);

    $contarTexto = strlen($textoMiniscula);

    $textoRemplazaro = str_replace(" "," -", $textoMiniscula);



    echo "Texto Minuscula: $textoMiniscula <br><br>";
    echo "Texto separado: $textoRemplazaro <br><br>";
    echo "Tamano del texto: $contarTexto";


};


$texto = 'Bienvenido a PHP';
$texto2 = 'Programacion';
$texto3 = 'Desarrollo Web';
$texto4 = 'Full stack developer';



$searchWord = fn($texto) => substr($texto,11);

$searchWord2 = fn($texto2) => substr($texto2,0,3);

$searchWord3 = fn($texto3) => substr($texto3,9);

$searchWord4 = fn($texto4) => substr($texto4,4,6);



echo "Resultado ".$searchWord($texto) ."<br><br>";
echo "Resultado ".$searchWord2($texto2) ."<br><br>";
echo "Resultado ".$searchWord3($texto3) ."<br><br>";
echo "Resultado ".$searchWord4($texto4) ."<br><br>";



?>