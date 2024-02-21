<?php

$array = ["apple", "banana", "cherry", "date", "elderberry"];

$removedElements = array_splice($array, 1, 2);

echo "Array after removing elements: ";
print_r($array);

$replacement = ["grape", "fig"];
array_splice($array, 2, 0, $replacement);

echo "Array after replacing elements: ";
print_r($array);

?>