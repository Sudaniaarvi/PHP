<?php

$students = [
    ["name" => "Aarvi", "age" => 18, "city" => "Vasavad"],
    ["name" => "Parvi", "age" => 19, "city" => " Virpur"],
    ["name" => "Yashvi", "age" => 20, "city" => "Surat"]
];

$names = array_column($students, "name");

echo "Names: ";
print_r($names);

?>