<?php

$fp=fopen("employee_data.csv","a");

 $no_rows =count(file("employee_data.csv"));

 $count =count(file("employee_data.csv"))-1;

 function clean_text($str){
        $str=trim($str);
        $str=stripslashes($str);
        $str=htmlspecialchars($str);
        return $str;
}


    $fname = clean_text($_GET['fname']);
    $lname=clean_text($_GET['lname']);
    $email=clean_text($_GET['email']);

   
   $data="";
    
    if($no_rows==1){
        $data.="\n";
        $data= $fname."," .$lname.",".$email;
    }
    else{
        $data= $fname."," .$lname.",".$email;
    }

    fwrite($fp,$data."\n");
    $count =count(file("employee_data.csv"))-1;
    fclose($fp);

    echo "Number of employees are :". $count ;
    
    
