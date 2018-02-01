<?php

$user = "hsingh1@pipingrock.com";

$pass ="Assignment1";

$encryptedPassword= md5($pass);#encrypting the password

$resultData=$user."|".$encryptedPassword;

#echo $resultData."<br>";

$fileName="storeInfo.txt";

 $fp=fopen($fileName,"a") or die("Could not open the specified file");

fwrite($fp,$resultData."\r\n") or die("Could not write the data to the specified file"); 



fclose($fp);



