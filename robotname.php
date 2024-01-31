<?php 
function getNewName(): string {
$letters = range('a' ,'z');
shuffle($letters);
$number = mt_rand(100 , 999);
return "$letters[0]$letters[1]$number";
}

echo getNewName();