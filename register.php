<?php

/* if($_FILES["file"]["name"] != '')
    {
     $test = explode('.', $_FILES["file"]["name"]);
     $ext = end($test);
     $name = rand(100, 999) . '.' . $ext;
     $location = './image/' . $name;  
     move_uploaded_file($_FILES["file"]["tmp_name"], $location);
    # echo '<img src="'.$location.'" height="150" width="225" class="img-thumbnail" />';
    } */
    



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
    
 

   $location=""; 
    $name="";
    
    

   
   $data="";
    
    if($no_rows==1){
        $data.="\n";
        $data= $fname."," .$lname.",".$email."," . $name;
    }
    else{
        $data= $fname."," .$lname.",".$email."," .$name;
    }

    fwrite($fp,$data."\n");
    $count =count(file("employee_data.csv"))-1;
    fclose($fp);

    echo "Number of employees are :". $count ;
    
    
    
