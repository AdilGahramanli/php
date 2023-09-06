<?php
function formatPrice (float $prix):float {
    round($prix, 2);
    echo $prix * 0.01 ." €";
}

?>