<?php 

declare(strict_types = 1);

// require_once 'App/Account.php';
// require_once 'App/socialMedia.php';

spl_autoload_register( function($class) {
    $formattedClass = str_replace("\\", "/", $class);
    $path = "{$formattedClass}.php";

    require_once $path;
});

use App\{Account,socialMedia};

$myAccount = new Account('john', 20);

// $myAccount?->deposit(30);
 
var_dump($myAccount);