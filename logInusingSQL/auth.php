<?php

$userName=$_POST["name"];
$userpassword=$_POST["pass"];
$submission=$_POST["submit"];

$dbuserName="root";
$dbpassword="";
$db="login";
$conn=new mysqli("localhost",$dbuserName,$dbpassword,$db)or die("unable to connect the database");

if(isset($submission))
{
	$sql="select * from userinfo where name='$userName' and password='$userpassword'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1)
	{
		header("location:home.php");
		
	}
	else
		echo"userName and password is not correct";
}

?>