<?php
$userName=$_POST["name"];
echo $userName;
$passw=$_POST["pass"];
echo $passw;
$validation=array("Miraj"=>"1234","Jack"=>"4321","Mike"=>"9876");
$redirectPage="http://localhost/miraj/valid/";
foreach($validation as $k=>$v)
{
	if($userName==$k && $passw==$v)
	{
		header('location: http://localhost/miraj/valid/');
	}
		else
	echo "invalid";
		
} 

?>