<?php

$array1 = [1, 2, 3]; 
$array2 = [4, 5, 6]; 

$mergedArray = array_merge($array1, $array2);

echo "The combined array is: ";

foreach ($mergedArray as $value) 
{
    echo $value . " ";
}

?>