<?php
$count=0;
function clean_text($str){
        $str=trim($str);
        $str=stripslashes($str);
        $str=htmlspecialchars($str);
        return $str;
}

if(isset($_POST["submit"]))
{
    $fname = clean_text($_POST["fname"]);
    $lname=clean_text($_POST["lname"]);
    $email=clean_text($_POST["email"]);

    $fp=fopen("employee_data.csv","a");
    $no_rows =count(file("employee_data.csv"));
   
   $data="";
    

    if($no_rows==0){
        $data.="\n";
        $data= $fname."," .$lname.",".$email;
    }
    else{
        $data= $fname."," .$lname.",".$email;
    }

    fwrite($fp,$data."\n");
    $count =count(file("employee_data.csv"))-1;
    fclose($fp);
    
    
}


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
             #btn {
                float: right;
                }
</style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
       <label>Number of employees are : <?php echo $count ;?></label>
        <button type="button"  data-toggle="modal" data-target="#myModal" id="btn">Add Employee</button>
       
       <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

            
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="Employee Details">Add New Employee</h4>
            <p> Please fill the form to add New Employee </p>
            </div>
            <div class="modal-body">
            <form id="register"  method="post" enctype="multipart/form-data">
                    <input type="text" placeholder="First Name" name="fname" required>
                    <br>
                    <input type="text" placeholder="Last Name" name="lname" required>
                    <br>
                    <input type="text" placeholder="Enter Email" name="email" required>
                    <br>
                    Select image to upload:
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <br>
                    <input type="submit" value="Add Details" name="submit" >             
            </form>
        </div>
        
        
      
    </div>
  </div>
</div>
    </body>
</html>
