<?php
function colorCode(string $color): int
{

    $resistorColor = [
        'black' => 0, 'brown' => 1, 'red' => 2, 'orange' => 3,
        'yellow' => 4, 'green' => 5, 'blue' => 6
    ];


    echo $resistorColor[$color];
    return $resistorColor[$color];
}

colorCode('red');
