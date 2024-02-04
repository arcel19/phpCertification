<?php 

declare(strict_types = 1);
require_once 'Account.php';
$myAccount = new Account();

$myAccount?->deposit(50)->deposit(30);