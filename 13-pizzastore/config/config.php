<?php 

/*
|---------------------------------------------------------------------
| Config file
|---------------------------------------------------------------------
|
| Ce fichier contiendra nos variables "globales" pour notre site.
| Titre du site, titre de la page, page courante, ...
|
*/

$siteName = 'Pizza Store';

// Page courante et titre de la balise title 
//$currentPageTitle = 
//(!empty($currentPageTitle))? null :
//$currentPageTitle;
$currentPageURL = basename ($_SERVER['REQUEST_URI'], '.php'); 

?>
