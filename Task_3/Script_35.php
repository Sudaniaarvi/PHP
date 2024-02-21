<?php

$array = [1, 2, 3, 4, 5]; 

shuffle($array);

echo "The shuffled array is: ";

foreach ($array as $value) 
{
    echo $value . " ";
}

?>