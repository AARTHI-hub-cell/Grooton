<?php  
$connect = mysqli_connect("localhost", "root", "", "db");
if(isset($_post["submit"]))
{
 if($_file['file']['name'])
 {
  $filename = explode(".", $_file['file']['name']);
  if($filename[1] == 'csv')
  {
   $handle = fopen($_file['file']['tmp_name'], "r");
   //echo '<script> type="text/javascript">alert("Import done")</script>';
  }
 }
}
 echo '<script> type="text/javascript">alert("Import done")</script>';
?>  
<!DOCTYPE html>
<html>
 <head>
  <title>CSV File</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  .box
  {
   max-width:600px;
   width:100%;
   margin: 0 auto;
  }
  </style>
 </head>
 <body>
   
  <div class="container">
   <br />
   <h3 align="center">CSV File</h3>
   <br />
   <form id="upload_csv" method="post" enctype="multipart/form-data">
    <div class="col-md-3">
     <br />
     <label>Select CSV File</label>
    </div>  
                <div class="col-md-4">  
                    <input type="file" name="csv_file" accept=".csv" style="margin-top:15px;"/>
                </div>  
                <div class="col-md-5">  
                    <input type="submit" name="submit" value="upload" style="margin-top:10px;" class="btn btn-info"/>
                </div>  
                
   </form>
   <br/>
   <br/>
   <div id="csv_file_data"></div>
   
  </div>
 </body>
</html>




