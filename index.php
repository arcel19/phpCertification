<?php 

declare(strict_types = 1);

require_once 'App/Account.php';
require_once 'App/socialMedia.php';

use App\{Account,socialMedia};

$myAccount = new Account('john', 20);

$myAccount?->deposit(30);
 
var_dump($myAccount);