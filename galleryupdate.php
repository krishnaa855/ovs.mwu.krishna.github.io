<?php
include("connection.php");
if(isset($_POST['submit']))
{
$filename = $_FILES["image"]["name"];
$tempname =$_FILES["image"]["tmp_name"];
$folder = "gallery/".$filename;
move_uploaded_file($tempname, $folder);

if($filename!="")
{
  $sql="INSERT INTO gallery VALUES('$folder')";
  $data= mysqli_query($con,$sql);

  if($data)
  {

     echo"<script>alert('New Record Added')</script>";
     header("refresh:2;url=dashboard.php");
  }
}
             
    else{

     echo"<script>alert('No Record Added')</script>";
    
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

                             <form class="form-horizontal" method="POST" enctype="multipart/form-data">
	<input type="file" name="image">
	<br>
	<input type="submit" name="submit">
</form>
</body>
</html>