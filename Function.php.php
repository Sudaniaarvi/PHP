<?php

echo "Mathematical Function"."<br>"."<br>";

echo abs(-5)."<br>";
echo sqrt(16)."<br>";
echo rand(1, 100)."<br>";
echo round(3.7)."<br>";
echo ceil(3.2)."<br>";
echo floor(3.8)."<br>";
echo pow(2,3)."<br>";
echo max(5,8,3)."<br>";
echo min(5,8,3)."<br>"."<br>";


echo "String Function"."<br>"."<br>";

echo strlen("Hello, World!")."<br>";
echo strpos("Hello, World!","World")."<br>";
echo str_replace("World","Universe","Hello,World!")."<br>";
echo substr("Hello,World!",0,5)."<br>";
echo strtolower("Hello,World!")."<br>";
echo strtoupper("Hello,World!")."<br>";
echo ucfirst("hello,world!")."<br>";
echo strrev("Hello,World!")."<br>";
echo trim("Hello,World!")."<br>"."<br>";


echo "Date & Time Functions"."<br>"."<br>";

echo date("Y-m-d H:i:s")."<br>";
echo time()."<br>";
echo strtotime("2023-08-01")."<br>";
echo gmdate("Y-m-d H:i:s")."<br>";
echo mktime(12,0,0,8,1,2023)."<br>";
echo date_default_timezone_set("America/New_York")."<br>"."<br>";

?>





