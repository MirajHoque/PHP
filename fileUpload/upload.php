<?php

$filename=$_FILES["uploadFile"]["name"];
$tempname=$_FILES["uploadFile"]["tmp_name"];
$folder="uploadFolder/".$filename;
move_uploaded_file($tempname,$folder);
echo "<img src='$folder' height='500' width='500'>";
//print_r($_FILES["uploadFile"]);



?>