<?php

$fileName="employee_data.csv";

$count1 = 0;

$td="";


$fp=fopen($fileName,"r");



while (($row = fgetcsv($fp, 0, ",")) !== FALSE) {
    //Print out my column data.
    # writing the data into row and column
       if($count1 === 0) 
       {
        $td.="<tr>
        <th>$row[0]</th>
        <th>$row[1]</th>
        <th>$row[2]</th>
        <th>$row[3]</th>
        </tr>";
       }
       else{
        $td.="<tr>
        <td>$row[0]</td>
        <td>$row[1]</td>
        <td>$row[2]</td>
		<td><img src='". "./image/".$row[3]."' height='". 100 ."' width='". 150 ."'></td>;
        </tr>";
       }
       $count1++;
   }
    
//$td .= "</table>";

print_r ( $td);










