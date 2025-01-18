<?php

/*#Ejercicio 1

$age = -200;

function validateAge($age){

    try{

        if($age < 0){

            throw new Exception("Warning, check age data");
        }

    }catch(Exception $e){

        echo "Error: ".$e->getMessage();
        return;
    }

    if($age < 18){

        echo "You are a kid";

    }elseif($age >=18 && $age <=25){

        echo "You are a adolescent";

    }elseif($age > 25 && $age <=65){

        echo "You are adult";
    }else{

        echo "You are a old people";
    }
}

validateAge($age);*/



/*Ejercicio 2 (switch)


$dayWeek = 'Monday';


function classification($dayWeek){

    $validateDay = strtolower($dayWeek);

    switch($validateDay){

        case "monday":
        echo "The $dayWeek is boring in the morning";
        break;
        
        case "tuesday":
        echo "You are select the day $dayWeek";
        break;

        //more case for that is example, soo no problem at the moment
        
        default:
        echo "Opcion no valida";
        break;


    }

}


classification($dayWeek);*/




/*Ejercicio 3 (Bucles)

$contador = 1;

while($contador <= 10){

    echo "$contador <br><br>";
    $contador++;
}

echo "<br><br>";



for($i = 2 ; $i <=20 ; $i++){

    if($i % 2 == 0){

        echo "$i <br><br>";
    }


}*/


$fruits = ['apple','banana','grape'];



foreach($fruits as $index => $element){

    echo "$index " .$element . "<br><br>";


}















?>