<?php

function square($num) {
    return $num * $num;
}

$numbers = [1, 2, 3, 4, 5];

$result = array_map("square", $numbers);

echo "Result: ";
print_r($result);

?>