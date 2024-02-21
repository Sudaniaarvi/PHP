<?php

$array1 = [1, 2, 3, 4, 5]; 
$array2 = [4, 5, 6, 7, 8];

$difference = array_diff($array1, $array2);

echo "Difference between the arrays: ";
print_r($difference);

?>