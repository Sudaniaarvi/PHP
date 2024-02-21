<?php

$elements = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$chunkSize = 3;

$chunks = array_chunk($elements, $chunkSize);

foreach ($chunks as $chunk)
{
    echo "Chunk: ";
    print_r($chunk);
    echo "<br>";
}

?>