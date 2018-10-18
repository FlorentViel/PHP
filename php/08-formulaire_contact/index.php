<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Formulaire</title>
</head>
<body>
    
<form method="POST">
<br/>

    <div class="input-group mb-3">
    <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Email@ (Requis)</span>
    </div>
    <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" name = "Email" required="required"> 
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Objet (Requis)</span>
  </div>
  <input type="text" class="form-control" aria-label="Objet" aria-describedby="inputGroup-sizing-default" name = "Objet" required="required">
</div>

<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Message (Requis)</span>
  </div>
  <textarea class="form-control" aria-label="With textarea" name = "Message" required="required"></textarea>
</div>

<input class="btn btn-primary" type="submit" value="Envoyer">

</form>


<?php

// On a aussi accès à $_POST
var_dump($_POST);

$email = null;
$objet = null;
$message = null;
$isValid = true;
if(!empty($_POST)) {

    $email = $_POST['Email'];
    $objet = $_POST['Objet'];
    $message = $_POST['Message'];

    if (empty($email)){
        $isValid == false;
        exit('Cet email est vide. </br>');
    }


    if (false == filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $isValid == false;
        exit('Cet email n\'est pas valide');
    }
    



    if(strlen($objet) == 0){
        $isValid == false;
        exit ("L'objet est vide ");
    }

    if(strlen($message) <= 15) {
        $isValid == false;
        exit ("15 caractères minimum ");
    }

   

        if($isValid == true){
    echo 'Envoie du mail';
    }
}



?>

</body>
</html>


