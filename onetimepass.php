<?php

$user = "hsingh1@pipingrock.com"; # The admin's username

$pass ="Assignment1"; # The admin's password

$encryptedPassword= md5($pass);#encrypting the password

$resultData=$user."|".$encryptedPassword;

#echo $resultData."<br>";

$fileName="storeInfo.txt"; # destination where the password and username will be stored

 $fp=fopen($fileName,"a") or die("Could not open the specified file");

fwrite($fp,$resultData."\r\n") or die("Could not write the data to the specified file"); 



fclose($fp);



