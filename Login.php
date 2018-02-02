<?php

$user = $_POST['user'];#To catch Username that the user types

$pass = $_POST['pass']; # to catch the password that the user types

$encryptPass= md5($pass); # encoding the password

/* Reading the file */
$fileName="storeInfo.txt";

$fp=fopen($fileName,"r");

$fr=fread($fp,filesize($fileName));

# putting the username and password on different array indices
$resultArray=explode('|',$fr); # This is the array which contains username and password

if(trim($resultArray[1])==trim($encryptPass) && trim($resultArray[0])==trim($user)){
	header("Location: Dashboard.php",true);
}
else{
	echo "Incorrect username and password";
}

	



	

	
