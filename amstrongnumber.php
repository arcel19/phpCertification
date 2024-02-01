<?php 
 function isAmstrong( int $number): bool {
    $digits = str_split( (string) $number);
    $digitCount = count($digits);

    $digits = array_map( function($digit) use ($digitCount) {
        return $digit ** $digitCount;
    }, $digits );
  
    return array_sum($digits) === $number ;

 }

 isAmstrong(878);