<?php

// take an array with some elements
$array = array('one'=>'aaaabbbb','two'=>'zzzzzzaaaaa','three'=>'cccaaaaa','four'=>'bbbaa');
// get the size of array
$count = count($array);
echo "<pre>";
// Print array elements before sorting
print_r($array);
// for ($i = 0; $i < $count; $i++) {
//     for ($j = $i + 1; $j < $count; $j++) {
//         if ($array[$i] > $array[$j]) {
//             $temp = $array[$i];
//             $array[$i] = $array[$j];
//             $array[$j] = $temp;
//         }
//     }
// }
// echo "Sorted Array:" . "<br/>";
// asort($array);
// print_r($array);



/* Custom asort function */
function custom_asort($num)
{
    $return = $numbers = array();   // empty array 
    foreach($num as $key => $val)
    {
        $numbers[] = $val ;
    }
    sort($numbers);  // sort number 
    $arrlength = count($numbers);   // count array lenght 
    for($x = 0; $x < $arrlength; $x++) {
        $key = array_search($numbers[$x], $num);      // array_search apply for search key according to index 
        $return[$key] = $numbers[$x]; 
    }
    echo "<pre>";
    print_r($return);  // print function output 
}
$num=array('one'=>'aaaabbbb','two'=>'zzzzzzaaaaa','three'=>'cccaaaaa','four'=>'bbbaa');
custom_asort($num);  // calling function 






?>