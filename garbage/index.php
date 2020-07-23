<?php 
include("connection.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Voting System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="o">
		<div class="h">
			Online Voting System
			<img class="i" src="/voting/im/flag.gif">
			<img class="j" src="/voting/im/flag.gif">
		</div>
		<div class="slidenotice"><marquee> <a href="">

<?php
$sql="SELECT * FROM notice where noticeno =6 ";
$query_run= mysqli_query($con,$sql);

    while($row=mysqli_fetch_array($query_run)){
echo "
 <div>".$row['title']."</div>
 ";
}
?>
</a>



		</marquee></div>
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
				<li><a href="userform1.php">User Registration</a></li>
				<li><a href="">Help</a></li>
			</ul>

		</div>
		<div id="ns"><h3><u>Notice</u></h3>
		<table align="center" style="min-height: 400px;width:200px;line-height:15px;" border="1px solid black">
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
			<div id ="cn">I am content</div>
			
		</div>
		<div class="f">&#169;MWU-BCT2072</div>
	</div>

</body>
</html>