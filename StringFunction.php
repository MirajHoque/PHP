<?php
$output=strlen("Hello World");
echo $output;
echo"<br>";

$sub=substr("Hello",2);
echo $sub;
echo"<br>";

$sub1=substr("Hello",0,2);
echo $sub1;
echo"<br>";

$sub2=substr("Hello",-3);
echo $sub2;
echo"<br>";

$sub=strpos("Hello",'H');
echo $sub;
echo "<br>";

$out=strrpos("Hello World",'o');
echo $out;
echo "<br>";


?>