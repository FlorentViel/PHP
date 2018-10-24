
<?php include(__DIR__.'/partials/header.php'); ?>



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
    <span class="input-group-text">Message (Requis, 15 caractères minimum)</span>
  </div>
  <textarea class="form-control" aria-label="With textarea" name = "Message" required="required"></textarea>
</div>

<input class="btn btn-primary" type="submit" value="Envoyer">

</form>


<?php

// On a aussi accès à $_POST

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

   

        if($isValid){
    echo 'Envoie du mail';
    }
}



?>




