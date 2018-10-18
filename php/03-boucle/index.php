<?php

/*
1. Créer une boucle qui affiche 10 étoiles
2. Imbriquer la boucle dans une autre boucle afin d'afficher 10 lignes de 10 étoiles
3. Nous obtenons un carré. Trouver un moyen modifier le code pour obtenir un trigangle rectangle
*/

for ($i = 10; $i > 0; $i-- )
{
    for ($j = 10; $j > 0; $j--){
            
        echo '*';
   
    

    echo '<br/>';   


$fullStar = 1;
$indexStar = 5;

for ($x = 0; $x < 6 ; $x++){
    for ($y = 0; $y < 11; $y++){
    if($y == $indexStar){
        echo '¤';
    }   else {
        echo '*';
    }
}
}


$indexStar;
$fullStar += 2;
echo '<br/>';
}
}

            
