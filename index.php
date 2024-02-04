<?php 

declare(strict_types = 1);

require_once 'app/Account.php';

use App\Account;

$myAccount = new Account('john', 20);

$myAccount?->deposit(30);
 
var_dump($myAccount);