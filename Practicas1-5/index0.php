<?php
/*Task1
function presentation($name,$ocupation,$welcome){

    echo "Hi my name is $name, at the moment i am $ocupation, $welcome";

}

presentation('alex','development','welcome to the class programation');*/


/*Task2

function calculateAreaT($base,$height){

    $calculateAreaF = $base * $height;


    return $calculateAreaF;

}

echo "The area of rectagle is  ".calculateAreaT(10,50) . " cm";*/




//Nota al parecer si asignas al principio en el parametro de la funcion algun valor no hace falta colocar algun valor cuando ya llamas ala 
//funcion
function calculateDiscount($price,$porcentaje = 0.1){

    $discount = $price * $porcentaje;

    $finalPrice = $price - $discount;

    return $finalPrice;

}

echo "The final price is: ".calculateDiscount(500) . " pesos";




?>