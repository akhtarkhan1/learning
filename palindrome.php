<?php

//Using strrev functionality

function getResult($param)
{
    if($param == strrev($param)) {
        return 'It is a palindrome word';
    } else {
        return 'Not a palindrome word';
    }
}

$data = getResult('maadam');

echo $data;

function getData($param1) 
{
    
}







?>