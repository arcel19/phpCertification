<?php 

$multiplier = 2;
$multiply = function ($num) use($multiplier) {
    $multiplier = 5;
    return $num * $multiplier;
};

function sum ($a,$b, $callback){
    return $callback($a + $b);
}

echo sum(5,2,$callback);