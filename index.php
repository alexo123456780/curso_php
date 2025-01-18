<?php
//Ejercio 1 (comentario de una linea)

/*Comnetario de varias lineas*/

$name = 'Alejandro Rodrigo';
$age = 30;
$ocupation = 'Development';
$hobby = 'play the piano';
$status = true;
$salary = 255.80;


$lenguajeProgramating = ['PHP','JavaScript','C#','Python'];



echo "Hi my name is $name, i am $age years old and my major is $ocupation <br><br>";
echo "My hobby is $hobby and my salary  is $salary <br><br>";
echo "Status Active:". ($status? 'true' : 'false'). "<br><br>";

ob_start();
var_dump($name);
$dateName = ob_get_clean();


$dateName = var_dump($name);
$dateAge = var_dump($age);
$dateOcupation = var_dump($ocupation);
$dateHobby = var_dump($hobby);
$dateStatus = var_dump($status);

echo "$dateName <br>";
echo "$dateAge <br>";
echo "$dateOcupation <br>";
echo "$dateHobby <br>";
echo "$dateStatus <br>";

echo "My favorite lenguaje program is: ".$lenguajeProgramating[0]. "<br><br>";

//Manera de imprimir un array

print_r($lenguajeProgramating);

echo "<br><br>";



//Manera de imprimir un array pero con un separaror
echo implode("  /  ",$lenguajeProgramating) . "<br><br>";


if($status == true){

    echo "Oh my good, you are active in de world of programating";

}else{

    echo "WTF2,brother and you arent active";
}




?>