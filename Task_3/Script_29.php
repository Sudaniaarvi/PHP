<?php
$array = [5, 2, 8, 1, 4]; 

$reversedArray = array_reverse($array);

echo "The reversed array is: ";
foreach ($reversedArray as $value) {
    echo $value . " ";
}
?>