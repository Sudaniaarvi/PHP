<?php

$associativeArray = [
    "name" => "Aarvi",
    "age" => 20,
    "city" => "Rajkot"
]; 

$flippedArray = array_flip($associativeArray);

echo "Flipped array: ";
print_r($flippedArray);

?>