<?php
$array = [1, 2, 2, 3, 4, 4, 5]; 

$uniqueArray = array_unique($array);

echo "The array with duplicate values removed is: ";
foreach ($uniqueArray as $value) {
    echo $value . " ";
}
?>