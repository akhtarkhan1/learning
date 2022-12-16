<?php

//Bubble Sort

function getSortedData($arr) 
{
    for($i=0; $i<count($arr); $i++)
    {
        for($j=0; $j<count($arr)-$i-1; $j++)
        {
            if($arr[$j] > $arr[$j+1])
            {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
            }
        }
    }
    return $arr;
}

$arrData = [2, 8, 1, 3, 6, 7, 5, 4];
// $result = getSortedData($arrData);
// echo "<pre>";
// print_r($result);


//Linear Search

function getSearchedElement($arr,$x)
{
    for($i=0; $i<count($arr); $i++)
    {
        if($arr[$i] == $x)
        {
            return $arr[$i];
        }
    }

    return 'Not Found';
}

$result = getSearchedElement($arrData,10);
echo "<pre>";
print_r($result);


?>