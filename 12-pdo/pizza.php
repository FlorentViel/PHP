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


// 1 . Ecrire la requête qui permet de récupérer la pizza avec l'id 3

//$query = $db->query('SELECT * FROM pizza');

//var_dump($query);
$id = $_GET['id'] ? $_GET['id'] : 0; 


if (is_numeric($id)){
echo 'SELECT * FROM pizza WHERE id = "' . $id . '"; </br> ';
$query = $db->query('SELECT * FROM pizza WHERE id = '.$id);

// On vérifie que la pizza existe
$pizzas = $query->fetch();
if ($pizzas){
echo ('<h1>' . $pizzas['id'] . " : " . $pizzas['price'] .' $ ' . ' --> ' . $pizzas['name']. '</h1>');
}

else {
    echo '<h1> La pizza n\' existe pas </h1>' ;
}

} else {
    echo '<h1> La pizza n\' existe pas </h1>' ;
}



// 2 .  Récupérer l'id dynamaquement à partir de l'URL
// Exemple : Si je saisis pizza?id=7 , je dois récupérer la pizza avec l'ID 7


?>