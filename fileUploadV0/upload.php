<?php

$fileName=$_FILES["fileUpload"]["name"];
$tempName=$_FILES["fileUpload"]["tmp_name"];
$filesize=$_FILES["fileUpload"]["size"];
$filetype=$_FILES["fileUpload"]["type"];
$folder="uploadFolder/".$fileName;

if($filesize>2000000)
{
	echo "files must be less than 2mb";
}

else if(
         
        ($filetype != "application/pdf") &&
        ($filetype != "image/jpeg") &&
        ($filetype != "image/jpg") &&
        ($filetype != "image/png")    
	   )
	   {
		   echo "invalid type";
	   }
	   else
	   { 
		   move_uploaded_file($tempName,$folder);
		   //echo "<img src='$folder' height='500' width='500'>";
		   echo "<img src='$folder' height='400' width='300'>";	
	   }		   

?>