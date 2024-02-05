<?php 
declare(strict_types=1);

namespace App;

class Dnatest {
    public static function nucleotidecount(string $input): array
    {
        return [
            'A'=> substr_count($input, 'A'),
            'T'=>substr_count( $input, 'T'),
            'C'=>substr_count( $input ,'C'),
            'G'=> substr_count($input, 'G' )
        ];
    }
}