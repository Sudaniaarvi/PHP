<?php

function sum($carry, $item) 
{
    return $carry + $item;
}

$numbers = [1, 2, 3, 4, 5];

$result = array_reduce($numbers, "sum");

echo "Result: " . $result;

?>