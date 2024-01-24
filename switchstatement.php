<?php
$total = 1;
switch ($total) {
    case 1:
    echo '<p>$total is 1</p>';
    break;
    case 2:
        echo '<p>$total is 2</p>';
        break;
    case 3:
        echo '<p>$total is 3 </p>';
        break;
        default: 
        echo '<p> $total is more than 3</p>';
}

$turtle = 'leo';
$tas = '';
switch($turtle) {
    case 'chronoxx':
    $tas = 'chronxx';
    break;
    case 'leo':
        $tas ='leo';
        break;
        default:
        $tas= 'more than espected';
}

echo $tas;
?>