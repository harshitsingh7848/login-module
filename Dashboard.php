    <?php
    $fp=fopen("employee_data.csv","a");

    $count =count(file("employee_data.csv"))-1;
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

            <script>
                
                var updateEmployeeView = function(){

                    $.ajax({
                        url:"get_data.php",
                        dataType:"html",
                        success:function(data){
                            $('#employee_table').html(data); 
                        }
                    });
                
            
        };
                $(document).ready(function(){
                    
                
                updateEmployeeView(); 
                   
                });
    </script>     



    




        </head>
        <body>

        <script src="store_details.js"></script>
        <label id="demo"> <?php echo "Number of employees are :". $count ;?></label>
            <button type="button"  data-toggle="modal" data-target="#myModal" id="btn" >Add Employee</button>
        
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
                <form id="register" enctype="multipart/form-data" >
                        <input type="text" placeholder="First Name" name="fname" id="fname" required>
                        <br>
                        <input type="text" placeholder="Last Name" name="lname" id="lname" required>
                        <br>
                        <input type="text" placeholder="Enter Email" name="email" id="email" required>
                        <br>
                                     
                </form>
                <div>
                Select image to upload:
                        <input type="file" name="file" id="file">
                        <br>
                        <button type="button" name="submit" id="submit" onclick="func()" data-dismiss="modal" >Add Details</button>
                </div>
            </div>
        </div>
    </div>
    </div>

                    <div class="container">
                        <div class="table-responsive">

                            <div id="employee_table">
                            
                            </div>

                        </div>
                    </div>
        </body>
    </html>



    <script>
$(document).ready(function(){
 $('#submit').click( function(){
  var name = document.getElementById("file").files[0].name;
  var form_data = new FormData();
  var ext = name.split('.').pop().toLowerCase();
  if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
  {
   alert("Invalid Image File");
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("file").files[0]);
  var f = document.getElementById("file").files[0];
  var fsize = f.size||f.fileSize;
  if(fsize > 2000000)
  {
   alert("Image File Size is very big");
  }
  else
  {
   form_data.append("file", document.getElementById('file').files[0]);
   $.ajax({
    url:"register.php",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    success:function(data)
    {
     alert(data);
    }
   });
  }
 });
});
</script>