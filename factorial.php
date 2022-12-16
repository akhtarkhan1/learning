<?php

//Normal Method

function getFactorialResult($num) 
{
    $fact = 1;

    for($i=1; $i<=$num; $i++) {
        $fact = $fact * $i;
    }

    return $fact;

}

$result1 = getFactorialResult(5);
echo $result1;

//Recursive Method

function getRecursiveFactorialData($num) 
{
    if($num <= 1) {
        return 1;
    } else {
        return $num * getRecursiveFactorialData($num - 1);
    }
}

$result2 = getRecursiveFactorialData(5);
echo $result2;

?>