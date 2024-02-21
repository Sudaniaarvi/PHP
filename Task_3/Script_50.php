<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$condition = function($value) 
{
    return $value % 2 === 0;
};

$filteredNumbers = array_filter($numbers, $condition);

echo "Filtered Numbers: ";
print_r($filteredNumbers);

?>