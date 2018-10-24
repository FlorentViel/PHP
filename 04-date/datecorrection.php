<?php

$seconds = date('s');

echo date ('l d F Y ');
echo ' il est ';
echo date('H:i:');
echo $seconds . ' seconde';
echo ($seconds > 1)? 's' : ''; 


// Quel jour il sera dans 10 jours ?

var_dump(date('d/m/Y' , time()));
var_dump(date('d/m/Y' , strtotime('+ 10 days')));

//

$currentTimetamp = time();
$targetTimestamp = strtotime('25 December 2018') ;

$total = round($targetTimestamp - $currentTimetamp) / 60 / 60 / 24;
$days = round($total);
$hours = ($total - $days) * 24;

echo $days . 'jours et ';
echo $hours . ' heures';


?>

