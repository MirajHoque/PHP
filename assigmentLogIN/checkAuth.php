<?php
$userName=$_POST["name"];
echo $userName."<br>";
$passw=$_POST["pass"];
echo $passw."<br>";
$validation=array("Miraj"=>"1234","Jack"=>"4321","Mike"=>"9876");
$redirectPage="http://localhost/miraj/valid/";
foreach($validation as $k=>$v)
{
	if($userName==$k && $passw==$v)
	{ 
	header('location: http://localhost/miraj/valid/');
	}
		else
	echo "";
		
} 

?>