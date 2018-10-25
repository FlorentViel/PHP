<?php

/*
*Permet de formatter un prix
*
*/

function formatPrice($price){
$explodePrice = explode('.', $price);

return $explodePrice[0]. '<span class ="card-price-cents">€'. $explodePrice[1]. '</span>';

}

?>
