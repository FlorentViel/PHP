<?php

/*$nombre = 10;
while ($nombre >= 1) {
    echo $nombre-- . "<br/>";

} */

/*$paire = 0;
while ($paire >= 0 && $paire <= 100 ){
    
    $paire++;

    if ( 0 === $paire % 2 === 0){ //Yoda condition
        echo $paire . "<br/>";
    }
    

} */


$fizzbuzz = 0;
while ($fizzbuzz >= 0 && $fizzbuzz <100){
    
    $fizzbuzz++;
    
    if ( $fizzbuzz % 15 === 0 ){
        echo "fizzbuzz" . "<br/>";
    }

    if ( $fizzbuzz % 3 === 0){
        echo "fizz" . "<br/>";

    }

    else if ( $fizzbuzz % 5 == 0){
        echo "buzz" . "<br/>"; 
    }

    else { 
        echo $fizzbuzz . "</br>";
    }


} 

/* $number1 = 845;
$number2 = 312;

    // Calculer le reste de la division du plus grand nombre de par le plus petit
do {

 $reste = $number1 % $number2;

 // Si le reste est égale à 0, le pgcd est le nombre 2
 if ($reste == 0){
     $pgcd = $number2;
 }

 $number1 = $number2;
 $number2 = $reste;

} while ($reste !== 0);

echo $pgcd;

*/




