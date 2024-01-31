<?php 
function getPermission() {
    sleep(2);
    
    return 3;
} 
$permission = getPermission();
?>

<?php if($permission === 1) : ?>
    <h1>Hello admin</h1>
<?php elseif($permission === 2) : ?>
    <h1>hello mod</h1>
<?php else : ?>
    <h1> hello guest</h1>
<?php endif; ?>