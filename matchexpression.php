<?php
function add_to_x($x){
    return $x + 5;
}

$x = 0;
$result = match($x) {
    0 => add_to_x($x),
    1 => '$x is 1',
    2 => '#x is 2',
default => '$x is neither 1 or 2',
};
echo $result;
 