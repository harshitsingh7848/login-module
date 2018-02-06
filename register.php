<?php
 
 $uploadedFile="";
 
 $targetPath="";

 $fp=fopen("employee_data.csv","a"); # opening the CSV file where contents are to be placed
 
 $no_rows =count(file("employee_data.csv")); # count of number of rows in CSV file

 $count =count(file("employee_data.csv"))-1;
  
 #checkinng if data is coming from the client side 
   if(!empty($_POST['fname']) || !empty($_POST['email']) || !empty($_FILES['file']['name'])){ 
     $uploadedFile = '';
     if(!empty($_FILES["file"]["type"])){
          $fname = $_POST['fname'];
     $lname =  $_POST['lname'];# catching the last name
     $email =  $_POST['email'];

     
     $res=explode("@",$email); #converting the $email to array 
     
         $fileName = $res[0].'_'.$_FILES['file']['name']; #naming the image according to the first part of the email
         $valid_extensions = array("jpeg", "jpg", "png");
         $temporary = explode(".", $_FILES["file"]["name"]);
         $file_extension = end($temporary);
        
             $sourcePath = $_FILES['file']['tmp_name']; 
             $targetPath = "image/".$fileName; # giving the path where the image will be stored
             if(move_uploaded_file($sourcePath,$targetPath)){
                 $uploadedFile = $fileName; # the location of the image
             
         }
     }
     
    
     //echo $email;
  
  

 
 
 
    $data="";
     
    # writing the data to the excel file
     if($no_rows==1){
         $data.="\n";
         $data= $fname."," .$lname.",".$email."," . $uploadedFile;
     }
     else{
         $data= $fname."," .$lname.",".$email."," .$uploadedFile;
     }
 
     fwrite($fp,$data."\n");
     $count =count(file("employee_data.csv"))-1;
     fclose($fp);
    }
     echo "Number of employees are :". $count ; # printing the number of employees who are currently present in file
     
     
     
  
  
  
  
 