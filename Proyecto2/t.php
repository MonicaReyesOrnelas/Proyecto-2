<?php
$G = max($arreglo);
$P = min($arreglo);
function masAlejado($p, $g, $m) {
    $n1 = $g - $m;
    $n2 = $m - $p;
    if ($n1 > $n2){
        return $g;
    }
    else{
        return $p;
    }
}
