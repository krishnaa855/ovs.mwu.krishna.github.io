<?php
include("connection.php");

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
							
							<h3 class="text text-info text-center">Result</h3>
							<table class="table table-responsive table-hover table-bordered text-center">
								<tr>
									<td>##</td>
									<td>Candidate Name</td>
									<td>ObtainVote</td>
									<td>Wining Status</td>
								</tr>
								<?php
								error_reporting(0);
							$select="SELECT * FROM result where candidate_name=candidate_name";
							
								$data=mysqli_query($con,$select);
								$total_vote=0;
								while($row=$data->fetch_array()){
									 $total_vote=$total_vote+1;
								}
							



							 $sql ="SELECT * FROM candidate";
       
       
        $records=mysqli_query($con,$sql);
       $n=0;

        while($row1=mysqli_fetch_array($records))


        {
        	$n=$n+1;
        	$tt=$row1['total_votes'];
        	$perc=(($tt/$total_vote)*100);

        	?>
            
            
                    
            <tr>
            	<td><?php echo $n; ?></td>
               <td >
               
               	<?php  echo $row1['name'].' '.$row1['mname'].' '.$row1['lname'] ;?>
               </td>
               <td >
               
               	<?php  echo $tt;?>
               </td>
               <td>
               	<?php


               if($perc>50){
               	?>
               	<div class="progress">

               		<div class="progress-bar progress-bar-sucess" role="progressbar" aria-valuenow="<?php echo $perc ;?>" aria-valuemin="0" aria-valuemax="<?php echo $perc ;?>" style=" color: yellow;width: <?php echo $perc;?>%"><?php echo $perc;?>%
               			

               		</div>
               	</div> 
               	<?php

               }elseif($perc>40){

               	?>
<div class="progress">

               		<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo $perc ;?>" aria-valuemin="0" aria-valuemax="<?php echo $perc ;?>" style=" color:  black;width: <?php echo $perc;?>%"><?php echo $perc;?>%
               			

               		</div>
               	</div>

               	<?php
               }else{
               	?>
<div class="progress">

               		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?php echo $perc ;?>" aria-valuemin="0" aria-valuemax="<?php echo $perc ;?>" style=" color:  black;width: <?php echo $perc;?>% "><?php echo $perc;?>%
               			

               		</div>
               	</div>



               	<?php
               }


               	?>
               </td>
</tr>
           
          






          
          
           <?php


           
           echo "
              </tr>";
                
    } 
    ?>
    <tr>
    	<td>
    		Total Votes
    	</td>
    	<td colspan="3"><?php  echo $total_vote; ?></td>
    </tr>

      
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