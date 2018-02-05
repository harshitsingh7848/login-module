<?php

if($_FILES["file"]["name"] != '')
{
    /* $test = explode('.', $_FILES["file"]["name"]);
    $ext = end($test);
    $temp=explode('@',$email);
    $result=$temp[0]; */
    /* $name = $result.".".$ext ; */
    $name=$_FILES["file"]["name"];
   
    $location = './image/' . $name;  
    move_uploaded_file($_FILES["file"]["tmp_name"], $location);
    echo '<img src="'.$location.'" height="150" width="225" class="img-thumbnail" />';
   
}