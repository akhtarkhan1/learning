<?php

function isPrime($num)
{
    for ($i = 2; $i <= $num/2; $i++) {  
        if ($num % $i == 0) {  
            return True;  
        }  
    }
}

$result = isPrime(21);

if($result) {
    echo "Not a Prime Number";
} else {
    echo "It is a Prime Number";
}
?>