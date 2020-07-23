<?php
session_start();
include("connection.php");
if(isset($_POST['Login']))
{
	$user = $_POST['Username'];
	$password= $_POST['password'];
	

	$query ="SELECT * FROM addvoter WHERE uname='$user' && pass='$password'";

	$data = mysqli_query($con,$query);

	$total = mysqli_num_rows($data);
	//echo $total;

	if($total==1)
	{
		header("location:dashboardsub.php");
		$_SESSION['Username']=$username;
		
	}
	else
	{
		echo"<script>alert('Invalid Username and Password')</script>";
	}


}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Voting System</title>
	<link rel="stylesheet" type="text/css" href="style.css">


    <style>
.table1{

		margin-top: 10px;
		
        background: linear-gradient(yellow,crimson);
		border:0px solid white;
		border-radius: 25px;
		width: 300px;
	}
	#select
	{
		
		width:300px; 
		border:0px;
		background:transparent;
		outline: 0px;
		color:black;
		font-size: 18px;
		font-family: all;
		height: 32px;
		border-bottom: 3px solid white; 

	}
	#btn{
		width: 200px;
		height: 35px;
		font-size: 25px;
		font-family: all;
		background:linear-gradient(green,red);

	}

	#type
	{
		width:300px;
		border:0;
		background:transparent;
		outline: 0;
		color:white;
		font-size: 18px;
		height:32px;
		border-bottom: 3px solid white; 
	}
	input::-webkit-input-placeholder
	{
		font-size:20px;
		font-family: all;
		line-height:20px;
		color:black;
	}
<



    </style>
</head>
<body>
	<div class="o">
		<div class="h">
			Online Voting System
			<img class="i" src="/voting/im/flag.gif">
			<img class="j" src="/voting/im/flag.gif">
		</div>

		<div class="slidenotice"><marquee> Slide Notice</marquee></div>
		<div class="n">
			<ul>
				<li><a href="index.php">HOME</a></li>
				<li><a href="">ABOUT</a></li>
				<li><a href="">CONTACT</a></li>
			</ul>
		</div>
		<div id="ms">
			<ul>
				<li><a href="subadminlogin.php">Admin Login</a></li>
				<li><a href="">User Registration</a></li>
				<li><a href="">Help</a></li>
			</ul>

		</div>
		<div id="ns"><h3><u>Notice</u></h3>
		<table style="min-height: 400px;width:200px;line-height:15px;" border="1px solid black" align="center">
			<tr>
				<th></th>
			</tr>
			<tr>
				 <th></th>
				 </tr>
				 <tr>
				 <th></th>
				 </tr>
				 <tr>
				 <th></th>
				 </tr>
		</table> </div>
		<div class="c">
			<div id ="cn">
<form method="POST">
<table cellspacing="40" border="0" align="center"; class="table1"> 

						
							
							<td align="center"> <h2><u>User Login Form</u></h2></td>
							<tr>
								<td align="center"> <img  src="no.jpg" width="40%"></td>
							</tr>
							<tr>
								<td>
 						<input type="text" name="Username" placeholder="Enter Username" id="type">

                    		</td>

							</tr>
							<tr>
								<td><input type="password" name="password" placeholder="***************" id="type"></td>
							</tr>
							<tr>
								<td align="center"><input type="submit" name="Login" id="btn"></td>
							</tr>
						</table>
					</form>


			</div>
			
		</div>
		<div class="f">&#169;MWU-BCT2072</div>
	</div>

</body>
</html>