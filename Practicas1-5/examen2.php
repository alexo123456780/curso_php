<?php

//Manipulacion de cadenas

/*Task 1

$cadena = "Aprender php es divertido y practico";


function convertirCadenasM($cadena){

    $cadenaMayuscula = strtoupper($cadena);

    return $cadenaMayuscula;

};

function remplazarPalabra($cadena){

    $newWord = str_replace("divertido","fascinante",$cadena);  //replace(rempazar alguna palabra)

    return $newWord;
};


function extraerCadena($cadena){

    $extraerWord = substr($cadena,0,8);

    return $extraerWord;

};


$opcion = 'remplazar';

$opcionValidada = strtolower($opcion);

try{

    if(is_numeric($opcionValidada)){

        throw new Exception("Solo se permiten texto, no valores numericos");
    }


}catch(Exception $e){

    echo "ERROR:  ".$e -> getMessage();
    return;
}


switch($opcionValidada){

    case "convertir":
    echo "Palabra nueva:  ".convertirCadenasM($cadena);
    break;
    
    case "remplazar":
    echo "Palabra nueva:  ".remplazarPalabra($cadena);
    break;
    
    case "extraer":
    echo "Palabra nueva:  ".extraerCadena($cadena);
    break;
    
    default:
    echo "Opcion no valida";
    break;
}*/


//Task 2

$cadena2 = "Alejandro Magana";

function contarA($cadena2){

    $contador = 0;

    $nuevaCadena = strtolower($cadena2);

    for($i = 0 ; $i < strlen($nuevaCadena); $i++){

        if($nuevaCadena[$i] == 'a'){

            $contador++;
        }
        
    }

    echo "La letra a aparece:  ".$contador." veces";

}


contarA($cadena2);



















?>