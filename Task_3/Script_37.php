<?php

$array = [];

array_push($array, "apple", "banana", "cherry");

echo "Array after adding elements: ";
print_r($array);

$removedElement = array_pop($array);

echo "Array after removing element '$removedElement': ";
print_r($array);

?>