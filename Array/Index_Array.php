<?php

$students=array(2010,1,"Aarvi","Sudani","20-10-2005","B1","BCA","Atmiya","rajkot","php","array");
print_r($students);
echo "</br>";
for($i=0;$i<=9;$i++)
	print($students[$i]."</br>");

foreach($students_details as $i)
	print($i."</br>");

echo $students[0]."</br>";
echo $students[3]."</br>";
echo $students[2]."</br>";

?>