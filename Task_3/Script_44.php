<?php

$associativeArray = [
    "name" => "Parvi",
    "age" => 20,
    "city" => "Rajkot"
]; 

$values = array_values($associativeArray);

echo "Values from the associative array: ";
print_r($values);

?>