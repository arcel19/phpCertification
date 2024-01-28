<?php 
function twoFer( string $name = "you"): string {
    echo "one for ".($name ?: 'you').", one for me";
    return "One for ".($name ?: 'you').", one for me.";
}

twoFer();