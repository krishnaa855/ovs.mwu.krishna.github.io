<?php
include("connection.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>right</title>
</head>
<body>


<table width="100%" height="50">
	<tr>
		<td width="100%" bgcolor="green"></td>
	</tr>
</table>


<table width="100%" height="200" cellspacing="20" >
	<tr>
		<td align="center" width="25%" bgcolor="red" style="border-radius: 15px;" ><a style="text-decoration: none;" href="viewvoter.php" target="right"><font color="white" size="6">Total Voters<br>
			<?php
			$query = "SELECT * FROM addvoter";
			$data = mysqli_query($con,$query);
			$total = mysqli_num_rows($data);
			if($data!=0)
			{
				echo "$total";
			}
			else{
				echo "No record exist";
			}

			?>
		</font></a><a href="viewvoter.php" target="right"></td>
		<td align="center" width="25%" bgcolor="red" style="border-radius: 15px;"><a style="text-decoration: none;" href="viewcan.php" target="right"><font color="white" size="6">Total Candidate<br>
			<?php
			$query = "SELECT * FROM candidate";
			$data = mysqli_query($con,$query);
			$total = mysqli_num_rows($data);
			if($data!=0)
			{
				echo "$total";
			}
			else{
				echo "No record exist";
			}

			?>

		</font></a></td>

		<td align="center" width="25%" bgcolor="red" style="border-radius: 15px;"><font color="white" size="6">Gallery image</font></td>

		<td align="center" width="25%" bgcolor="red" style="border-radius: 15px;"><font color="white" size="6"><li><a href="adminlogout.php">Logout</a></li></font></td>
	</tr>
</table>
</body>
</html>