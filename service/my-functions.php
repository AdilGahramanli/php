<?php
function formatPrice (float $price):string {

    return number_format($price/100, 2) ." €";
} 

function priceExcludingVAT(float $price):string {
    return $price - ($price*19.6/100);
}

function discountedPrice(float $price, float $discount):float {
    return $price - ($price*$discount/100);
}
