<?php
session_start();
if(isset($_SESSION['Username'] )){
    $a= $_SESSION['Username'];

}
else{
   
    echo"<script>location.href='subadminlogin.php'</script>";
}
?>



<?php 

include("connection.php");
if(isset($_POST['submit']))
{
	$email = $_POST['uname'];
	
	

	$query ="SELECT * FROM addvoter WHERE uname='$email'";

	$data = mysqli_query($con,$query);

	$total = mysqli_num_rows($data);
	//echo $total;

	if($total!==1)
	{
		header("location:cast.php");
		
	}
	else
	{
		echo"<script>alert('Invalid Username and Password')</script>";
	}


}

?>

<!DOCTYPE html>
<html>
<head lang="en">
			<meta charset="utf-8">
        	<meta http-equiv="X-UA-Compatible" content="IE=edge">
        	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Online Voting System|User Detail</title>
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
		<br>
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
								<li><a href="result.php"><button style="background: blue;border:0px; color: white;">RESULT</button></a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li>
									<li><a href="userpwchange.php"><button style="background: blue;border:0px; color: white;">CHANGE PASSWORD</button></a></li>
									<li><a href="logoutu.php"><button style="background: blue;border:0px; color: white;">LOGOUT</button></a></li>
								
							</ul>
							</ul>
							
					</div>
				</div>
		</div>
	</div>
						<!-- /.col for side-menu -->
						<div class="col-md-12" id="cn">
					<div class="panel">
						<div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5><u>Voters Info</u></h5>
                                                </div>
                                            </div>


                                             <div class="panel-body p-20">

                                                <table class="table table-responsive">
                                                   <thead>
                                                        <tr>
                                                            <th>SN</th>
                                                            <th>District Code</th>
                                                            <th>Name</th>
                                                            <th>Citizenship No</th>
                                                            <th>Voter-ID No</th>
                                                            <th>Email</th>
                                                            <th>Mobile</th>
                                                            <th>Address</th>
                                                            <th>Status</th>
                                                              
 <?php
        $con = mysqli_connect('localhost','root','');

        if(!mysqli_select_db($con,'public'))
        {
            echo"Database NOt Selected";
        }

      
       $sql ="SELECT * FROM addvoter WHERE uname='$a'";
       $cnt=1;

        $records=mysqli_query($con,$sql);
       

        while($row=mysqli_fetch_array($records))


        {?>
            
            
                    
            <tr>
               

            <td><?php echo($cnt)?></td>
            <?php echo "
            <td>".$row['districtcode']."</td>
            <td>".$row['Name'].' '.$row['mname'].' '.($row['lname'])."</td>
            <td>".$row['citizenship']."</td>
            <td>".$row['voterno']."</td>
            <td>".$row['email']."</td>
            <td>".$row['Contact']."</td>
            <td>".$row['Address']."</td>
            <td>".$row['Action']."</td>

          

            "?>





           <?php
           echo "
              </tr>";
                
    $cnt=$cnt+1;} 

       ?>



           
        



</td>
	

                                                       
       
                                                        </tr>
                                           </thead>
                                       </table>
                                   

                                        </div>
								

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