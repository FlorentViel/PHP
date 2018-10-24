<?php

// On créer une nouvelle connexion à la BDD
try {

$db = new PDO('mysql:host=localhost;dbname=pizzastore;charset=utf8', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, // Active les erreurs SQL
]);

} catch(Exception $e){
    echo $e->getMessage(),
    // Redirection en PHP vers Google avec le message d'erreur concerné
    header('Localisation: https://www.google.fr/search?q='.$e->getMessage());
    echo '<img src="...";
}

