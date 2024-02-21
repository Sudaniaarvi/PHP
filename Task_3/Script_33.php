<?php

$array = [
    "name" => "Aarvi",
    "age" => 20,
    "city" => "Rajkot"
]; 

$key = "age"; 

if (array_key_exists($key, $array))
{
    echo "The key '$key' exists in the array.";
} 

else
{
    echo "The key '$key' does not exist in the array.";
}

?>