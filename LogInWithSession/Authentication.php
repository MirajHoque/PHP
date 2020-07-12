<?php
session_start();
if($_POST['name']=='Rodela' && $_POST['pass']=='9876')
{
	$_SESSION["uname"]=$_POST["name"];
	//echo "hello"'.$_SESSION["uname"].'"you are welcome";

	echo "<a href='LogedIn.php'>LogOut</a>";
}
else
die("LOG IN FAILURE");	

?>

