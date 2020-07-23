<?php
session_start();
if(isset($_SESSION['uid'])){
   
}
else{
    echo"<script>location.href='adminlogin.php'</script>";
}
?>
<?php
include("connection.php");
error_reporting(0);
$dc=$_GET['dc'];
$na= $_GET['Name'];
$ma= $_GET['mname'];
$la= $_GET['lname'];
$ad= $_GET['Address'];
$co= $_GET['Contact'];
$em= $_GET['email'];
$se= $_GET['sex'];
$db= $_GET['DOB'];
$ci= $_GET['citizenship'];
$vo= $_GET['voterno'];
$ag= $_GET['age'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Voters</title>
	<style>
		table{
			color:white;
			border-radius: 20px;
			min-height: auto;
			min-width: auto;
		}
		#button
		{
			background-color: green;
			color: white;
			height:32px;
			width:125px;
			border-radius: 35px;
			font-size: 16px;
		}
		body{
			background:linear-gradient(brown,green,grey,red);
		}


	</style>
</head>

<body>
	<br><br><br>
	<form action="" method="GET">
		<table border="0" bgcolor="black" align="center" cellspacing="20">
			<tr>
				<td>District Code</td>
				<td><input type="text" value="<?php echo "$dc"?>" name="districtcode"></td>
			</tr>
			<tr>
				<td>First Name</td>
				<td><input type="text" value="<?php echo "$na"?>" name="Name" required=""></td>
			</tr>
			<tr>
				<td>Middle Name</td>
				<td><input type="text" value="<?php echo "$ma"?>" name="mname"  ></td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td><input type="text" value="<?php echo "$la"?>" name="lname" required=""></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text" value="<?php echo "$ad"?>" name="Address" required=""></td>
			</tr>
			<tr>
				<td>Contact</td>
				<td><input type="text" value="<?php echo "$co"?>" name="Contact" required="" ></td>
			</tr>
			
				<tr>
				<td>Citizenship No</td>
				<td><input type="text" value="<?php echo "$ci"?>" name="citizenship"required="" ></td>
			</tr>
			<tr>
				<td>E-mail</td>
				<td><input type="email" value="<?php echo "$em"?>" required="" name="email" ></td>
			</tr>
			<tr>
				<td>Voter ID</td>
				<td><input type="text" value="<?php echo "$vo"?>" name="voterno" required="" ></td>
			</tr>
			
			<tr>
				<td>Gender</td>
				<td><input type="text" value="<?php echo "$se"?>" name="sex" required="" ></td>
			</tr>
			<tr>
				<td>DOB</td>
				<td><input type="date" value="<?php echo "$db"?>" name="DOB" required=""></td>
			</tr>
			<tr>
				<td>Age</td>
				<td><input type="text" value="<?php echo "$ag"?>" name="age" required=""></td>
			</tr>
			
			<tr>
				<td colspan="2" align="center"><input type="submit" id="button"name="submit" value="Update"></a></td>
			</tr>
		
			</table>
</form>
</body>
</html>
<?php
if($_GET['submit'])
{
	$districtcode =	$_GET['districtcode'];
	$Name =	$_GET['Name'];
	$mname =	$_GET['mname'];
	$lname =	$_GET['lname'];
	$Address = $_GET['Address'];
	$Contact = $_GET['Contact'];
	$email =	$_GET['email'];
	$sex =	$_GET['sex'];
	$DOB =	$_GET['DOB'];
	$citizenship =$_GET['citizenship'];
	$voterno =$_GET['voterno'];
	$age=$_GET['age'];


	$query="UPDATE addvoter SET Name='$Name',mname='$mname',lname='$lname',districtcode='$districtcode',Address='$Address',Contact='$Contact',email='$email',sex='$sex',DOB='$DOB',citizenship='$citizenship',voterno='$voterno',age='$age'WHERE citizenship='$citizenship'";

	$data=mysqli_query($con,$query);
	if($data)
	{
		echo"<script>alert('Record Updated')</script>";
		?>
	<META HTTP-EQUIV="Refresh"CONTENT="0; URL=http://localhost/voting/vosub.php">
	<?php
	}
	else{
			echo"<script>alert('Failed Updated')</script>";
			
	}
}



?>
