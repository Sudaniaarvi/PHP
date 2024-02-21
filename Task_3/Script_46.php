<?php

$size = 5; 
$value = "Hello"; 

$filledArray = array_fill(0, $size, $value);

echo "Filled array: ";
print_r($filledArray);

?>