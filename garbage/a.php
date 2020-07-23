

<?php
session_start();
if(isset($_SESSION['uname'])){
   
}
else{
    echo"<script>location.href='adminlogin.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta charset="utf-8">
<head>
	<title>Admin Pannel</title>
	<link rel="stylesheet" type="text/css" href="css/stylea.css">
	
</head>
<body bgcolor="#13395E">
	<table align="center" border="2px solid grey" bgcolor="grey" style=";margin-top:50px;background-color:#13395E;border: 01px solid black;">
		<tr>
			<th>
	<div class="w">Online Voting System
<img class="i" src="/voting/im/flag.gif">
<img class="j" src="/voting/im/flag.gif">
	</div>
	<div style="height:294px;" class="menu">
	<ul>
		<li><a href="a.php">Dashboard</a></li>
		<li><a href="">Voter</a>
			<ul>
		<li><a href="registervoter.php">Add Voters</a></li>
		<li><a href="viewvoter.php">View Voters</a></li>
		<li><a href="">Search Voters</a></li>
		
	</ul>
</li>
		<li><a href=""></i>Candidate</a>
			<ul>
		<li><a href="regcan.php">Add Candidate</a></li>
		<li><a href="viewcan.php">View Candidate</a></li>
		<li><a href="">Search Candidate</a></li>
		
	</ul>
</li>
		<li><a href="">Result</a></li>
		<li><a href="pwch.php">Change Password</a></li>
		<li><a href="adminlogout.php">Logout</a></li>
	</ul>
</div>
<div class="footer">&#169;MWU-BCT2072</div>
</th>
</tr>
</table>

</body>
</html>