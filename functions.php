<?php 
function is_palindrome($string) {
    // convert a string to lowercase and remove spaces
    $string = str_replace(' ', '',strtolower($string));
    //chech string against that same string reversed
    return ( $string == strrev( $string ) );
}

$check_string = 'woW';
if(is_palindrome($check_string)){
    echo "<p> $check_string is a palindrome</p>";
}else {
    echo "<p> $check_string is not a palindrome</p>";
}


//Union typing

function double(int $a){
    return $a * 2;
}
echo double(3.4) .'<br/>';

//otherwise with union typing you can have this

// function union(int|float|null $a){
//     return $a * 2 ;
// }
// echo union(3.4);

//optional arguments and name arguments

function math($a, $b = 2 , $op = 'multiply'){
    if($op == 'add'){
        return $a + $b;
    } elseif( $op == 'sub'){
        return $a - $b;
    }elseif( $op == 'divide'){
        return $a / $b;
    }

    return $a * $b;
}

// echo math(12, op: 'add');

// ananymous function 



