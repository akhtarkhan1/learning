<?php

$str = "Hello is the the best the world is Hello the is is the Hello";

getData($str);

function getData($str) {

  $arr = explode(" ",$str);
  $new_array = [];

  foreach ($arr as $key => $value) {
    if(isset($new_array[$value]))
        $new_array[$value] += 1;
    else
        $new_array[$value] = 1;
  }

  asort($new_array);

  $last_element = array_pop($new_array);
  $second_last = array_pop($new_array);

  echo $second_last;

  

  
}

?>