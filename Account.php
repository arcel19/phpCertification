<?php 
declare(strict_types=1);
namespace App;

class Account{
    Public function __construct(
        public string $name,
        public float $balance
    ) {
        
    }
}