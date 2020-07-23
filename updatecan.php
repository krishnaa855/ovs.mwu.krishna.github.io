
<?php
session_start();
if(isset($_SESSION['uname'] )){
    

}
else{
   
    echo"<script>location.href='adminlogin.php'</script>";
}
?>
<?php
include("connection.php");
error_reporting(0);
$code = $_GET['code'];
$na = $_GET['name'];
$ma= $_GET['mname'];
$la= $_GET['lname'];
$ad= $_GET['address'];
$co= $_GET['contact'];
$em= $_GET['email'];
$se= $_GET['gender'];
$db= $_GET['moto'];
$rg= $_GET['regno'];


?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Candidate</title>
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
				<td>Candidate Code</td>
				<td><input type="text" value="<?php echo "$code"?>" name="code" required ></td>
			</tr>
			<tr>
				<td>Registration No</td>
				<td><input type="text" value="<?php echo "$rg"?>" name="regno" required ></td>
			</tr>
			<tr>
				<td>First Name</td>
				<td><input type="text" value="<?php echo "$na"?>" name="name" required ></td>
			</tr>
			<tr>
				<td>Middle Name</td>
				<td><input type="text" value="<?php echo "$ma"?>" name="mname"  ></td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td><input type="text" value="<?php echo "$la"?>" name="lname" required ></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text" value="<?php echo "$ad"?>" name="address" required ></td>
			</tr>
			<tr>
				<td>Contact</td>
				<td><input type="text" value="<?php echo "$co"?>" name="contact" required ></td>
			</tr>
			<tr>
				<td>E-mail</td>
				<td><input type="text" value="<?php echo "$em"?>" name="email" required ></td>
			</tr>
			v
			<tr>
				<td>Gender</td>
				<td><input type="text" value="<?php echo "$se"?>" name="gender" required ></td>
			</tr>
			<tr>
				<td>Vision</td>
				<td>
                        <textarea class="form-control text" name="moto" autocomplete="off" placeholder="Enter Your Validate Address" rows="5" required=""></textarea>
</td>
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
	$code =	$_GET['code'];
	$name =	$_GET['name'];
	$mname =	$_GET['mname'];
	$lname =	$_GET['lname'];
	$address = $_GET['address'];
	$contact = $_GET['contact'];
	$email =	$_GET['email'];
	$gender =	$_GET['gender'];
	$moto =	$_GET['moto'];
	$regno= $_GET['regno'];



	$query="UPDATE candidate SET code='$code',name='$name',mname='$mname',lname='$lname',address='$address',contact='$contact',email='$email',regno='$regno',gender='$gender',moto='$moto',fullname='$name $mname $lname'WHERE regno='$regno'";

	$data=mysqli_query($con,$query);
	if($data)
	{
		echo"<script>alert('Record Updated')</script>";
		?>
	<META HTTP-EQUIV="Refresh"CONTENT="0; URL=http://localhost/voting/co.php">
	<?php
	}
	else{
			echo"<script>alert('Failed Updated')</script>";
			
	}
}



?>
