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
					        <li class="active"><a href="contact.php"><span class="glyphicon glyphicon-envelope"></span> Contact Us</a></li>
					        <li><a href="subadminlogin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
					        </li>
					      	</ul>
		    			</div>
  					</div>
				</nav>
			<!-- </div> -->
		</div>
		<div class="row">
		
			<div style="text-align: center; color: green">

<?php
include("connection.php");

if(isset($_POST['submit']))
{

    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $subject=$_POST['subject'];
    $mss=$_POST['message'];

    $sql="INSERT INTO contact (name,email,phone,subject,msg) VALUES('$name','$email','$phone','$subject','$mss')";

    if(mysqli_query($con,$sql))
    {
        echo"<div class='alert alert-warning' style='font-size:20px;'>Messsage Sent!!!!Thankyou for your feedback <br>Stay Connected With Us</div>";
        
       
    }else{

     echo"<div class='alert alert-danger' style='font-size:20px;>Messsage Failed!!!!Try Again</div>";
    
}
}
?>
								<h1><i>CONTACT FORM</i></h1>
								<p>Connect with us sending your views</p>

							<table class="table" >
								<div class="form">
									<form class="form-hoizontal" method="POST">
										
										<tr>
                                 <td height="10px"><div class="form-group">
                       <label> Name</label>
                        <input type="text" name="name" class="form-control text" autocomplete="off" placeholder="Enter Your Full Name" required="">
                         
                    </div></td>
                            
                              
                                 <td><div class="form-group">
                       <label>Email</label>
                        <input type="email" name="email" class="form-control text" autocomplete="off" placeholder="Enter Your Valid Email Address">
                    </div></td>
                             
                                
                             </tr>


                             <tr >
                             	 <td><div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control text" autocomplete="off" placeholder="Enter Your Phone No." required="">
                    </div></td>
                             	<td><div class="form-group">
                        <label>Subject</label>
                        <input type="text" name="subject" class="form-control text" autocomplete="off" placeholder="Enter Subject of Message" required="">
                    </div></td>
                             	
                             </tr>
                             <tr>

                                 <td colspan="3"><div class="form-group">
                        <label>Message:</label>
                        <textarea class="form-control text" name="message" autocomplete="off" placeholder="Enter Your Message" rows="6" required=""></textarea>
                    </div></td>
                             </tr>
                            <td colspan="3"> <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                        <input type="reset" class="btn btn-danger" value="Reset">
                    </div></td>
                             </tr>
									</form>
									
								</div>
							</table>
								

							
						</div>
							

			
		</div>
		<div class="row">
			<div class="col-md-12" id="footer">
				&#169;MWU-BCT2072
			</div>
		</div>
	</div>
</body>
</html>