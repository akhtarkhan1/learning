<?php

//Binary Search ... Given Array Should be in sorted form if you want to use the binary search.

function binarySearchNormal($arr,$x)
{
    
	if (count($arr) === 0) {
        return false;
    } 

	$low = 0;
	$high = count($arr) - 1;
	
	while ($low <= $high) {
		
		$mid = floor(($low + $high) / 2);

		if($arr[$mid] == $x) {
			return true;
		}

		if ($x < $arr[$mid]) {
			$high = $mid -1;
		}
		else {
			$low = $mid + 1;
		}
	}
	
	return false;
}

function binarySearch(Array $arr, $start, $end, $x)
{
	if ($end < $start)
		return false;

	$mid = floor(($end + $start)/2);
	if ($arr[$mid] == $x)
		return true;

	elseif ($arr[$mid] > $x) {
		return binarySearch($arr, $start, $mid - 1, $x);
	}
	else {
		return binarySearch($arr, $mid + 1, $end, $x);
	}
}

// Driver code
$arr = array(1, 2, 3, 4, 5);
$value = 5;

if(binarySearch($arr, 0, count($arr) - 1, $value) == true) {
	echo $value." Exists";
} else {
	echo $value." Doesnt Exist";
}

if(binarySearchNormal($arr, $value) == true) {
	echo $value." Exists";
} else {
	echo $value." Doesnt Exist";
}

?>