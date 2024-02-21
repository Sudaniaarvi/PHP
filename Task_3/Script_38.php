<?php

$array = ["apple", "banana", "cherry"]; 

$removedElement = array_shift($array);

echo "Array after removing element '$removedElement': ";
print_r($array);


array_unshift($array, "orange", "kiwi");

echo "Array after adding elements: ";
print_r($array);

?>