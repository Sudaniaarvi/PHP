<?php

$students_details=array("id"=>2010,
"rno"=>57,
"fname"=>"Aarvi",
"lname"=>"Sudani",
"city"=>"rajkot",
"programme"=>"bca",
"sub"=>"php",
"topic"=>"array",
"uni"=>"atmiya");
print_r($students_details);

foreach($students_details as $i)
	print($i."</br>");

?>