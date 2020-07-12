<?php
$file=fopen("data.txt", "r+");
while(!feof($file))
{
	echo str_replace("\n","<br>",fgets($file));
}
fclose($file);

?>