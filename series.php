<?php 
declare(strict_types = 1);

function slices(string $series , int $size) : array {
    $seriesLenght = strlen($series);
    if ( $size >  $seriesLenght || $size < 1) {
        return [];
    } 

    $result = [];

    for( $i = 0; $i <= $seriesLenght - $size; $i++ ) {
        $result[] = substr($series , $i, $size);
    }

    return $result;
}

   slices('34377',4);