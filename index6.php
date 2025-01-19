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


$convertirMinisculas("HELLO BROTHER");









?>