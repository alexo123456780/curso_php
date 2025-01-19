<?php

/*$lenguajeFavorite = ['PHP','JavaScript','Python','C#'];

array_push($lenguajeFavorite,'Java');

print_r($lenguajeFavorite);

echo "<br><br>";

echo "Array Completo: ".implode(" ,  ",$lenguajeFavorite);

echo "<br><br>";


foreach($lenguajeFavorite as $elemento){

    echo "$elemento <br><br>";
}*/



//El array_merge combina arrays y el in_array busca algun elemento de un array

$colors1 = ['blue','green','red','yellow'];
$colors2 = ['gray','purple','white','black'];

$combinate = array_merge($colors1,$colors2);

print_r($combinate);
echo "<br><br>";

echo "Array combinate:  ".implode(" , ",$combinate);


$arrayValidado = in_array("pink",$combinate)? "Si esta " : "No esta";

echo "<br><br>";

echo "$arrayValidado";








?>