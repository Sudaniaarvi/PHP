<?php

$array1 = [1, 2, 3, 4, 5]; 
$array2 = [4, 5, 6, 7, 8]; 

$intersection = array_intersect($array1, $array2);

echo "Intersection of the arrays: ";
print_r($intersection);

?>