<?php

$array = [1, 2, 3, 4, 5]; 
$value = 3;

if (in_array($value, $array))
{
    echo "The value $value exists in the array.";
} 
else 
{
    echo "The value $value does not exist in the array.";
}

?>