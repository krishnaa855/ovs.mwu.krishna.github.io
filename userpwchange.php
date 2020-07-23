<?php
include("connection.php");
session_start();
if(isset($_SESSION['Username'])){
   
}
else{
    echo"<script>location.href='adminlogin.php'</script>";
}
?>


<?php
include("connection.php");
error_reporting(0);

if(isset($_POST['submit']))
{
   $old_pass=$_POST['password'];
    $new_pass=$_POST['newpassword'];
    $re_pass=$_POST['confirmpassword'];

    $query = mysqli_query($con,"SELECT * FROM addvoter WHERE pass ='$old_pass'");
    $num = mysqli_fetch_array($query);

    if($num>0){
        if($new_pass==$re_pass){

        $con=mysqli_query($con,"UPDATE addvoter set pass='$new_pass' WHERE pass ='$old_pass' ");
        if($con){


       echo "<script>alert('Password Changed')</script>";
       echo"<script>location.href='userview.php'</script>";
    }
    }else{
        echo "<script>alert('Your Newpassword and Confirm Password Doesnot Match')</script>";
    }
}else{
   echo "<script>alert('Invalid Old Password')</script>";
}

}
   ?>





<!DOCTYPE html>
<html>
<head lang="en">
			<meta charset="utf-8">
        	<meta http-equiv="X-UA-Compatible" content="IE=edge">
        	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> welcome</title>
	<link rel="stylesheet" href="css1/bootstrap.min.css" media="screen" >
<link rel="stylesheet" type="text/css" href="er.css">
	<script src="js/jquery/jquery-2.2.4.min.js"></script>
	  <script src="js/bootstrap/bootstrap.js"></script>

	  
</head>
<body>

	<!-- /.container-fluid  -->
<div class="container-fluid" id="o">

	<!-- /.row for header -->
	<div class="row">
		<div class="col-sm-12" id="header">		
		
			
			<img class="i" src="im/flag.gif" class="img-responsive">
			<img class="j" src="im/flag.gif" class="img-responsive">
			Online Voting System
		</div>
	</div>

	<!-- /.row for slidebar notice -->
	<div class="row">
		<div class="col-sm-12" id="slidenotice" >		
		<marquee>slider notice</marquee>

		</div>
	</div>

	<!-- /.row for menu -->
	<div class="row">
		<div  class="col-sm-12">
			<div class="navbar navbar-default" id="menu">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse"data-target="#me" style="background: black;">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						
					</button>
				</div>
					<div class="collapse navbar-collapse" id="me">
						<ul class="nav navbar-nav">

								<li><a href="cast.php"><button style="background: blue;border:0px; color: white;">HOME</button></a></li>
								<li><a href=""><button style="background: blue;border:0px; color: white;">RESULT</button></a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li>
									<li><a href="userpwchange.php"><button style="background: blue;border:0px; color: white;">CHANGE PASSWORD</button></a></li>
									<li><a href="logout.php"><button style="background: blue;border:0px; color: white;">LOGOUT</button></a></li>
								
							</ul>
							</ul>

					</div>
				</div>
		</div>
	</div>
						<!-- /.col for side-menu -->
						<div class="col-md-12" id="cn">
							<div class="content" style="text-align: center;">
								
							<table align="center">
								<div class="form">
									<form class="form-hoizontal" method="POST">
										
										<tr>
                                 <td height="10px"><div class="form-group has-success">
                       <label for="success" class="control-label">Current Password</label>
                        <input type="password" name="password" class="form-control text" autocomplete="off" placeholder="Enter Your Current Password" required="">
                         
                    </div></td>
                    <tr>
                            
                              <tr>
                                 <td><div class="form-group has-success">
                       <label for="success" class="control-label">New Password</label>
                        <input type="password" name="newpassword" class="form-control text" autocomplete="off" placeholder="Enter New Password">
                    </div></td>
                </tr>
                <tr>
                             
                                 <td><div class="form-group has-success">
                        <label for="success" class="control-label">Confirm Password</label>
                        <input type="password" name="confirmpassword" class="form-control text" autocomplete="off" placeholder="Confirm PAssword" required="">
                    </div></td>
                             </tr>


                             <tr>
                            <td colspan="3"> <div class="form-group has-success">
                        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                       
                    </div></td>
                             </tr>
									</form>
									
								</div>
							</table>
								

							
						</div>
							

						</div>



		<!-- /.row for footer -->
		<div class="row">
	<!-- /.col for side-menu -->
				<div class="col-md-12" id="f">
					&#169;MWU-BCT2072
				</div>







</div>
</body>
</html>