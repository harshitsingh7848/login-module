<?php

    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard Page</title>
    </head>
    <body>
        <label id="count" >Number of Employees :  </label>
        <input id="submit" type="submit" value="Add Employees" onclick="document.getElementById('popup')" >
        <div id="popup">
            <form id="modal" action="register.php">
                <div id="rgForm">
                    <h1> Register New Employee</h1>
                    <p> Please fill the form to add New Employee </p>
                    <hr>
                    <input type="text" placeholder="First Name" name="fname" required>
                    <br>
                    <input type="text" placeholder="Last Name" name="lname" required>
                    <br>
                    <label>Email</label>
                    <br>
                    <input type="text" placeholder="Enter Email" name="email" required>

                    <div id="registerbtn">
                        <input id="rgnbutton" type="submit" value="Add"/>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
