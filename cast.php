
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
	<style>
		body{
			margin:0;
			padding: 10px;
			

		}
		*{
			
			
		}
		.table{
			width:100%;
			border-collapse: separate;
			background: linear-gradient(grey,green); 
			
		}
		.table td{
			padding:12px 15px;
			border:3px solid darkgrey;
			text-align: center;
			font-family: all;
			font-size: 20px;
			border-radius: 7px;
		}


		.table th{
			background-color: crimson;
			color: #ffffff;
			padding:12px 15px;
			border:1px solid #ddd;
			text-align: center;
			font-family: sans-serif;
			

		}
		.table tbody tr:nth-child(even){

			background-color: 
		}
		/*responsive*/
		@media(max-width: 500px){
			.table thead{
				display:none;
			}
			.table, .table tbody, .table tr, .table td{
				display: block;
				width:100%;
			}
			.table tr{
				margin-bottom: 15px;
			}
			.table td{
				text-align: right;
				padding-left: 50%;
				position: relative;
				font-size: 20px;
			}
			.table td::before{
				content: attr(data-label);
				position: absolute;
				left: 0;
				width: 50%;
				padding-left: 15px;
				font-size: 15px;
				font-weight: bold;
				text-align: left;
			}
		}

	</style>
</head>
<body>
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

	<div class="row">
		<div class="col-sm-12">
			<div align="center">
				<?php
		session_start();

if(isset($_SESSION['Username'] )){
    $a= $_SESSION['Username'];?>
   <p><h3 style="color: brown;"> <?php echo $a.' '.":-Welcome To Nepals' First Online Voting System";?></h3></p>
   <?php

}
else{
   
    echo"<script>location.href='userlogin.php'</script>";
}
?>
	


			</div>
			
		</div>
		
	</div>

		


<!-- /.row for menu-->


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
								<li><a href="userview.php"><button style="background: blue;border:0px; color: white;">PROFILE</button></a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li><a href="logoutu.php"><button style="background: blue;border:0px; color: white;" >Logout</button></a></li>
								
							</ul>
							</ul>
							
					</div>

				</div>
		</div>
	</div>
	

<!-- /.row for content-->
<div class="row">

	<!-- /.col for content -->
				<div class="col-md-12" >

					<form method="POST" action="u.php" enctype="multipart/form-data">
          <div class="form-group">


	<table class="table" id="example">
		<thead>
			<th colspan="5"><h4>Please Select One Candidate</h4></th>
	
			
			
		</thead>
		<tbody>
<?php
									 $sql ="SELECT * FROM candidate";
       
       
        $records=mysqli_query($con,$sql);
       

        while($row=mysqli_fetch_array($records))


        {?>
            
            
                    
            <tr>
               <td data-label ="Heading" align="center">
               	<input type="radio" name="voted" value="<?php  echo $row['fullname'] ?>">
               	<label><?php  echo $row['name'].' '.$row['mname'].' '.$row['lname'] ?></label>
               </td>

           
            <?php
           echo "<td data-label ='Heading 1'>";	
            
?>
<img src="<?php echo $row['picsource'];   ?>" height="180px" width="180px"><br>
<?php
echo "</td>

<td data-label ='Heading 2' ><b>".$row['code']."</td>

   
   <p ><td data-label ='Heading 4'>".$row['moto']."</td></p>

   ";


?>




          
          
           <?php


           
           echo "
              </tr>";
                
    } 

       ?>


<tr>				<th colspan="5">
            <div class="radio">
              
									
              <hr>

            <a href="">  <button type="submit" name="submit" class="btn btn-primary"><strong>Vote</strong></button></a>
              <a href="cast.php?"><button type="submit" class="btn btn-default">Decline</button></a>
            </div></th>
        </tr>
           
        





</tr>

			
		</tbody>
		
	</table>
	 </div>
          </form>


          <!-- /.row for voting notice -->
	<div class="row">
	<!-- /.col for side-menu -->
				<div class="col-md-12" id="f">
					&#169;MWU-BCT2072
				</div>
</div>




</body>
</html>