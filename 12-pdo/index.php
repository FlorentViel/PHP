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
}

// Permet de vérifier que la connexion à la base fonctionne

//var_dump($db);

// On créer une requête pour récupérer les pizzas
$query = $db->query('SELECT * FROM pizza');
//var_dump($query);

// Pour récupérer une seule pizza
//$pizza = $query->fetch();
//var_dump($pizza);
//var_dump($query->fetch());

// Pour récupérer toutes les pizzas
//$pizzas = $query->fetchall();
//var_dump($pizzas);

// Parcourir toutes les pizzas avec le fetchAll (Nom affiché dans un <h1>)
$pizzas = $query->fetchall();
foreach ($pizzas as $pizza){
    echo ('<h1>' .$pizza['name']. '</h1>');
}

$query = $db->query('SELECT * FROM pizza');
// Parcourir toutes les pizzas avec le fetch (Nom affiché dans un <h1>)
while ($pizza = $query->fetch()){
    echo '<h1>'. $pizza['name'] . '</h1>';
}

?>