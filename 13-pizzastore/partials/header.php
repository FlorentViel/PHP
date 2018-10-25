<?php

// Inclusion function 

require_once(__DIR__.'/../config/function.php');

// Inclusion du fichier config

require_once(__DIR__.'/../config/config.php');

// Inclusion du fichier database
require_once(__DIR__.'/../config/database.php');

var_dump($db);

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" media="print" href="assets/css/style.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">

    <title><?php 
    if(empty($currentPageTitle)){ // Si on est sur la page d'accueil

     echo $siteName. '- Notre pizzeria en ligne';  
    } else {
        echo $currentPageTitle . ' - ' . $siteName;
    } ?>
    </title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  </head>

  
  <body>

      <?php //var_dump($_SERVER); 
        // Si REQUEST_URL vaut /home/toto/fichier.php, $page reverra fichier
        //$page = basename ($_SERVER['REQUEST_URI'], '.php'); 
        ?>

     <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#"><?php 
    if(empty($currentPageTitle)){ // Si on est sur la page d'accueil

     echo $siteName. '- Notre pizzeria en ligne';  
    } else {
        echo $currentPageTitle . ' - ' . $siteName;
    } ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php echo ($currentPageURL== 'index') ? 'active' : ''; ?>">
              <a class="nav-link" href="index.php">Accueil<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item  <?php echo ($currentPageURL == 'pizza_list') ? 'active' : ''; ?>">
              <a class="nav-link" href="pizza_list.php">Liste des pizzas</a>
            </li>   
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>

    </header>
