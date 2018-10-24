<?php

function carre($nb)
 {
  return $nb*$nb;
 }


echo carre(10). '</br>';

function rectangle($lenght, $width)
 {
  return $lenght*$width;
 }


 
echo rectangle(8, 10 ) . '</br>';


 
function CircleArea($radius) {
   return 3.141 * carre($radius);
}

$rayon = 5;
 
echo "L'air d'un cercle de rayon de $rayon cm est ".CircleArea($rayon)." cm2<BR>";


/*function converthtTotic($prix, $tva)
{   
    return $prix * (1 + $tva / 100);
}

echo converthtTotic(100, 20) . '</br>';
echo '</br>';*/


function convert($prix, $tva, $withTax = true)
{   
    if($withTax){
    return $prix * (1 + $tva / 100);

    }

    return $prix / (1 + $tva / 100);

}

echo convert(100, 20);
echo '</br>';
echo convert(100, 20, false);
echo '</br>';


?>

