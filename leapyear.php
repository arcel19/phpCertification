<?php
function isLeap(int $year): bool
{
    if ($year % 4 !== 0) {
        return false;
    } elseif ($year % 100 !== 0) {
        return false;
    } elseif ($year % 400 !== 0){
        return false;
    }
    else {
        echo 'true';
        return true;
    }

}
