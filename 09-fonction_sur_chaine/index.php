<?php


function acronym($longname)
{
    $letters=array();
    $words=explode(' ', $longname);
    foreach($words as $word)
    {
        $word = (substr($word, 0, 1));
        array_push($letters, $word);
    }
    $shortname = strtoupper(implode($letters));
    return $shortname;
}

echo acronym("world of wacraft");

echo '<br/>';

// ---------------------------//

function conjugate($verb)
{
    $root = substr($verb, 0, -2);
    //$ending = substr($verb, -2);
    $vowels = ['a', 'e', 'i' , 'o', 'u', 'y'];

    $subjects= [
        'Je' => 'e',
        'J\'' => 'e',
        'Tu' => 'es',
        'Il / Elle / On' => 'e',
        'Nous' => 'ons',
        'Vous' => 'ez',
        "Ils, Elles" => 'ent'
    ]; 


    if (in_array(substr($verb, 0 , 1), $vowels)){
        unset($subjects['Je']);
    }

    else {
        unset($subjects['J\'']);
    }

    if (substr($root, -1) === 'g'){
        $subjects['Nous'] = 'eons';
    }

    $output = '' ;
    foreach($subjects as $subject => $ending){
        $output .= $subject . ' ' . $root . $ending . '<br/>';
    }
        
    return $output;

}

echo conjugate('plonger');



?>