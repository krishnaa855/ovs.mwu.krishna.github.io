<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Online Voting System|Home</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="js/jquery/jquery-2.2.4.min.js"></script>
	<script src="js/bootstrap/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="new.css">
<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 0% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.heading{
    font-family: "Roboto", sans-serif;
  font-size: 30px;
  color: #4CAF50;
}
</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<!-- <div  class="col-sm-12" style="border: 2px solid green;"> -->
				<nav class="navbar navbar-inverse" id="menu">
  					<div class="container-fluid">
			    		<div class="navbar-header">
			      			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        		<span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      	</button>
			      			<a class="navbar-brand" id="h" href="index.php">Online Voting System|MWU</a>
			    		</div>
		    			<div class="collapse navbar-collapse" id="myNavbar">
			     			<ul class="nav navbar-nav navbar-right">
			        		<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
					        <li><a href="about.php"><span class="glyphicon glyphicon-book"></span> About</a></li>
					        <li><a href="contact.php"><span class="glyphicon glyphicon-envelope"></span> Contact Us</a></li>
					        <li><a href="subadminlogin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
					        </li>
					      	</ul>
		    			</div>
  					</div>
				</nav>
			<!-- </div> -->
		</div>
		<div class="row" id="cn">
			<center>
			<?php
session_start();
error_reporting(0);
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
		header("location:cast.php");
		$_SESSION['Username']=$user;
		
	}
	else
	{
		echo"<div class='alert alert-danger' style='font-size:20px;width:30%;'>Invalid Username and Password</div>";
	}


}

?>
			<div class="login-page">
			  <div class="form">
			   <div class="heading">Voter Login</div>
			  
			    <form class="login-form" method="post">
			      <input type="text" name="Username" placeholder="Username" required="" />
			      <input type="password" name="password" placeholder="password" required="" />
			      <button name="Login">login</button>
			      <p class="message">Not registered? <a href="#">Create an account</a></p>
			    </form>
			  </div>
			</div>
			</center>
		</div>
		<div class="row">
			<div class="col-md-12" id="footer">
				&#169;MWU-BCT2072
			</div>
		</div>
	</div>
</body>
</html>