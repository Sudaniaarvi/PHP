<?php

$associativeArray = ["name" => "Aarvi", "age" => 20, "city" => "Rajkot", "country" => "USA", "state" => "New York", "job" => "Developer"];

$uniqueArray = array_unique($associativeArray);

echo "Unique Array: ";
print_r($uniqueArray);

?>