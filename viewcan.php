
<!DOCTYPE html>
<html>
<head>
	<title>Candidates Records</title>
	<style>
		#head{
			min-width: auto;
			min-height:50px;
			text-align: center;
			background-color: grey;
			font-size: 60px;
			border-bottom: 1px solid #BDC3C7;
			border-top: 5px solid #BDC3C7;
			font-family: all;
			margin-top: 0

		}
		#editbtn{
			background-color: green;
			color: white;
			width:130px;
			font-size: 18px;
		}
		#deletebtn{
			background-color: red;
			color: white;
			width:130px;
			font-size: 18px;
		}
		.i{
			float:left;
			height: 60px;
			margin-left: 10pt;
			padding: 0;
		}
		.j{
			float:right;
			height: 60px;
			margin-right: 4pt;
			padding: 0;
		}
		.footer
		{
			min-height:30px;
			width:auto; 
			text-align: right;
			background-color: grey;
			font-size: 20px;
			border-bottom: 5px solid #BDC3C7;
			border-top: 5px solid #BDC3C7;
			font-family: all;
			margin-top: 0;
			padding-right: 30pt;
			padding-top: 4pt;

		}


	</style>
</head>
<body bgcolor="">
	<table align="center" bgcolor="grey" style=";margin-top:0px;background-color:#13395E;border: 01px solid black;">
		<tr>
			<th>
	<div id="head">
		ONLINE VOTING SYSTEM
		<img class="i" src="/voting/im/flag.gif">
		<img class="j" src="/voting/im/flag.gif">
	</div>

	<div>
	<table align="center" border="2px solid black" cellspacing="3" style="min-width:auto;min-height:auto;line-height: 15px;margin-top:0px;background-color: skyblue;border: 2px solid black;">
		<tr>
			<th colspan="11" style="background-color: brown;"><h2> Candidates Record</h2></th>
		</tr>
		<tr style="background-color: yellow;font-size: 14px;">
			<th> Code</th>
			<th> FirstName</th>
			<th> MiddleName</th>
			<th> LastName</th>
			<th> Gender</th>
			<th> Email</th>
			<th> Contact</th>
			<th> Address</th>
			<th> Email</th>
			<th> Moto</th>
			
			
			<th colspan="2"> Options</th>
			
		
		</tr>

		<?php
		include("connection.php");
		error_reporting(0);
		

		

		$sql="SELECT * FROM candidate";

		$records=mysqli_query($con,$sql);

		while($row=mysqli_fetch_array($records))
		{
			echo"
			<tr>
			<td>".$row['code']."</td>
			<td>".$row['name']."</td>
			<td>".$row['mname']."</td>
			<td>".$row['lname']."</td>
			<td>".$row['gender']."</td>
			<td>".$row['email']."</td>
			<td>".$row['contact']."</td>
			<td>".$row['address']."</td>
			<td>".$row['moto']."</td>
			<td><a  href='updatecan.php?code=$row[code]&name=$row[name]&mname=$row[mname]&lname=$row[lname]&address=$row[address]&contact=$row[contact]&email=$row[email]&sex=$row[gender]&DOB=$row[moto]'><input type='submit' value='Edit/Update'id='editbtn'></a></td>
			<td><a href='deletecan.php?code=$row[code]&email=$row[email]' onclick='return checkdelete()'><input type='submit' value='Delete'id='deletebtn'></a></td>
			</tr>";
		}

		?>

	</table>
	<script>
		function checkdelete()
		{
			return confirm('Do you want to delete record!!!!!');
		}
	</script>
</div>
<div class="footer">&#169;MWU-BCT2072</div>
</th>
</tr>
</table>
</body>
</html>