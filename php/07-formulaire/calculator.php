
<form method="POST">
    <label for ="nombre">Votre premier nombre</label>
    <input type="number" id="number1" name ="nombre1" placeholder = "Saisir nombre 1" 
    value="<?php echo !empty($POST) ? $POST['nombre1'] : '' ; ?>">
    <br/>
    <br/>
    <select id = "operateur" name = "operateur" placeholder = "Saisir un opérateur">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <br/>
    <br/>
    <label for ="nombre">Votre deuxième nombre</label>
    <input type ="number" id="number2" name="nombre2" placeholder ="Saisir nombre 2" value="<?php echo !empty($POST) ? $POST['nombre2'] : '' ; ?>">
    <br/><br/>
    <button>Calculer</button>
</form>

<?php

// On a aussi accès à $_POST



//var_dump($_POST);

if(!empty($_POST)) {
    // $_POST contient ['nom' => 'Valeur', 'prenom' => 'Valeur']

    $nb1 = $_POST['nombre1'];
    $nb2 = $_POST['nombre2'];
    $operateur = $_POST['operateur'];
    $resultat = 0;

    

    if (!is_numeric($nb1) || !is_numeric($nb2)){
        echo 'Les donnés saisis ne sont pas valides';
        exit();
    } 


    /*switch ($operateur){
        case '+';
        echo($resultat = $nb1 + $nb2) ; 

        case '-';
        echo($resultat = $nb1 - $nb2); 

        case '*';
        echo($resultat = $nb1 * $nb2); 

        case '/';
        echo($resultat = $nb1 / $nb2); 

        break;
    
    
    } */


        if($operateur == '+'){

        echo($nb1 + $nb2);
        }

        elseif($operateur == '-')
        {

        echo($nb1 - $nb2);
        }

        elseif($operateur == '*')
        {

        echo($nb1 * $nb2);
        }


        elseif($operateur == '/' && $nb2 === '0')
        {

        echo('Division impossible'); 
        }

        elseif($operateur == '/')
        {

        echo($nb1 / $nb2); 
        }





    

   
}

?>

