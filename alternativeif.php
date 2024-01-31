<?php
$permission = 2;

if($permission === 1){
    ?><h1>Hello Admin</h1><?php
} elseif ($permission === 2){
    ?><h1>Admin</h1><?php
} else {
    ?><h1>guest</h1><?php
}

