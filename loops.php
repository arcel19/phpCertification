<?php
 //while loop
// $i = 10;
// do {
//     echo "<p>$i</p>";
//     $i++;
// }while ($i < 10);

// while($i < 10){
//     echo "<p>$i</p>";
//     $i++;
// }

//for loops

for( $i = 0 ; $i < 10 ; $i++) {
    // echo "<p>$i</p>";
}

$colors = array('red', 'green','blue');

for($i = 0 ; $i < sizeof($colors); $i++){
    echo '<p>'. $colors[$i] .'</p>';
}
