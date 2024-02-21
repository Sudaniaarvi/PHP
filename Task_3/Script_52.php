<?php

$array1 = ["name" => "Parvi", "age" => 20];
$array2 = ["city" => "Rajkot", "country" => "India"];

$mergedArray = array_merge($array1, $array2);

echo "Merged Array: ";
print_r($mergedArray);

?>