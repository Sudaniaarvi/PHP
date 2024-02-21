<?php
$array = [1, 2, 3, 4, 5]; 
$searchElement = 3; 

$index = array_search($searchElement, $array);

if ($index !== false) {
    echo "The element $searchElement is found at index $index.";
} else {
    echo "The element $searchElement is not found in the array.";
}
?>