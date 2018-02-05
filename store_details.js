function func() {
    
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 ) {
        document.getElementById("demo").innerHTML =this.responseText;
        updateEmployeeView(); 
        
      }
    };  
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var email = document.getElementById("email").value;
    
    

    
   

    var queryString = "?fname=" + fname;
    queryString += "&lname=" + lname;
    queryString += "&email=" + email;
   
    
    
    xhttp.open("GET", "register.php" + queryString  ,true);
    xhttp.send(); 
  }