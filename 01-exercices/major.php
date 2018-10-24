<?php

$age = 4;

if ($age >= 18){
 
    echo 'Vous pouvez entrez';
} elseif ($age >= 16 && $age < 18){
    echo 'Vous êtes presque majeur';
} elseif ($age >= 14 && $age < 16){

    echo 'Vous êtes jeune';
} else {
    echo 'Vous êtes trop jeune';
}


?>