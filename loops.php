<?php

//for loop
for($i=10;$i<0;$i--)
{
	
	echo $i."<br>";
}

 echo "<br>";

//while loop

$j=0;
while($j<10)
{
	echo $j."<br>";
	$j++;
}
echo "<br>";


//for each loop as index array

$siblings=array("Mita","Miraj","Mila");
foreach($siblings as $elements)
{
	echo $elements."<br>";
}
echo "<br>";
//foreach loop as associative array

$siblingsAge=array("Mita"=>24,"Miraj"=>22,"Mila"=>15);
foreach($siblingsAge as $element=>$value)
{
	echo $element." ".$value."<br>";
}
?>