<?php 
function sum( bool $dumpArr, ...$nums) {

    if($dumpArr){
        var_dump($nums);
    }
    return array_sum($nums);
}

echo sum( false, 5,5,5,6,7);