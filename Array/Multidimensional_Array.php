<?php

$students_info=array(
array("id"=>2010,"rno"=>57,"fname"=>"Aarvi","lname"=>"Sudani","city"=>"Vasavad","class"=>"B1","programme"=>"bca","sub"=>"php","topic"
=>"array","uni"=>"atmiya"),"</br>",

array("id"=>2011,"rno"=>62,"fname"=>"Parvi","lname"=>"Sorathiya","city"=>"Virpur","class"=>"B1","programme"=>"bca","sub"=>"php","topic"
=>"array","uni"=>"atmiya"),"</br>",

array("id"=>2012,"rno"=>58,"fname"=>"Gopi","lname"=>"Asodariya","city"=>"rajkot","class"=>"B1","programme"=>"bca","sub"=>"php","topic"
=>"array","uni"=>"atmiya"),"</br>",

array("id"=>2013,"rno"=>15,"fname"=>"Hasti","lname"=>"Dobariya","city"=>"rajkot","class"=>"B1","programme"=>"bca","sub"=>"php","topic"
=>"array","uni"=>"atmiya"),"</br>",

array("id"=>2014,"rno"=>25,"fname"=>"Yashvi","lname"=>"Sudani","city"=>"Surat","class"=>"B1","programme"=>"bca","sub"=>"php","topic"
=>"array","uni"=>"atmiya"),"</br>",

array("id"=>2015,"rno"=>58,"fname"=>"Reeva","lname"=>"Kikani","city"=>"rajkot","class"=>"B1","programme"=>"bca","sub"=>"php","topic"
=>"array","uni"=>"atmiya"),"</br>",

array("id"=>2016,"rno"=>35,"fname"=>"Akshita","lname"=>"Vasoya","city"=>"Vadodara","class"=>"B1","programme"=>"bca","sub"=>"php","topic"
=>"array","uni"=>"atmiya"),"</br>",

array("id"=>2017,"rno"=>24,"fname"=>"Aanshi","lname"=>"Nakrani","city"=>"Gondal","class"=>"B1","programme"=>"bca","sub"=>"php","topic"
=>"array","uni"=>"atmiya"),"</br>",

array("id"=>2018,"rno"=>12,"fname"
=>"Krinali","lname"=>"Bodar","city"=>"rajkot","class"=>"B1","programme"=>"bca","sub"=>"php","topic"
=>"array","uni"=>"atmiya"),"</br>",

array("id"=>2019,"rno"=>15,"fname"=>"Nenshi","lname"=>"Sudani","city"=>"rajkot","class"=>"B1","programme"=>"bca","sub"=>"php","topic"
=>"array","uni"=>"atmiya"));

print_r($students_info);

echo "<table border=1>";
echo "<tr><td>id</td>
<td>rno</td>
<td>fname</td>
<td>lname</td>
<td>city</td>
<td>class</td>
<td>programme</td>
<td>sub</td>
<td>topic</td>
<td>uni</td></tr>";

foreach($students_info as $i)
{
	echo "<tr>";
	foreach($i as $k)
	{
		echo "<td>"."$k"."</td>";
	}
	echo "</tr>";
}
echo "</table>";

?>