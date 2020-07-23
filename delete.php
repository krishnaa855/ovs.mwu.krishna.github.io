<?php
session_start();
if(isset($_SESSION['uname'])){
   
}
else{
    echo"<script>location.href='adminlogin.php'</script>";
}
?>
<?php
include("connection.php");
error_reporting(0);

$id=$_GET['id'];
$email=$_GET['email'];
$query="DELETE FROM addvoter where id='$id'&& email='$email'";

$data=mysqli_query($con,$query);
if($data)
{
	echo"<script>alert('Record Deleted Sucessfully')</script>";
	?>
<META HTTE-EQUIV="Refresh" CONTENT="5; URL=http://localhost/voting/vo.php">
<?php
}
else{
echo"<font color='red'>Failed To Delete Record From Database";
}

header("refresh:2;url=vo.php");
?>