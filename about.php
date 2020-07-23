<!DOCTYPE html>
<html>
<head lang="en">
			<meta charset="utf-8">
        	<meta http-equiv="X-UA-Compatible" content="IE=edge">
        	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Online Voting System|Home</title>
	<link rel="stylesheet" href="css1/bootstrap.min.css" media="screen" >

	<script src="js/jquery/jquery-2.2.4.min.js"></script>
	  <script src="js/bootstrap/bootstrap.js"></script>

	  <link rel="stylesheet" type="text/css" href="er.css">
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
		<marquee>
			<?php
			include("slider.php");
			?>

		</marquee>

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
								<li><a href="index.php">HOME</a></li>
								<li class="active"><a href="about.php">ABOUT</a></li>
								<li><a href="contact.php">CONTACT</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li><a href="userlogin.php">Voter Login</a></li>
							
								<li><a href="subadminlogin.php">Admin Login</a></li>
							</ul>
					</div>
				</div>
		</div>
	</div>
						<!-- /.col for side-menu -->
						<div class="col-md-9" id="cn">
						<p>
							All computer scientists who have done work in or are interested in online voting seem to agree that online voting is easier and time saving and more secure way of casting vote than that of traditional one.
In the world various system are already developed using technology. Many country are running their election by electronic voting by placing a digital hardware machines in different election booth. Similarly lever voting machine, direct recording electronic voting machine, punched card, optical voting machine. However Nepal is still in used of paper based election system.
 
In our country Nepal, voting is done with paper-based voting. From last two-three decades the traditional system is in use. For the voting at first every citizen above 18 years with citizenship have to register their name first and after receiving voter ID Card from Nepal Election Commission then only they are eligible to vote. It seems that this all process is too long and all those are paper work which is very much difficult to manage and secure. People have to stand on queues and many manpower are required to conduct a single election. This way becomes expensive to run for the government. Expense comes in Millions while conducting single election in Nepal. 
Nepal Election Commission is also planning to bring online voting system on coming election. [2]
According to the Saltman, Roy Electronic voting systems for electorates have been in use since the 1960s when punched card system debuted. The newly optical scan voting systems allow a computer to count a voter’s mark on a ballot. DRE Voting Machines which collect and tabulate votes in a single machine, are used by all voters in a single machine are used by all voters in all election in Brazil and India.[3]
According to the Serduit “Internet Voting system have gained popularity and have been used for government elections and referendums in Estonia parliamentary election 2007 which was another world first online voting. [4]  

						</p> 

						</div>


								<!-- /.col for news -->
								<div class="col-md-3">
									<div class="panel panel-primary">
										<div class="panel-heading" style="height: 30px;">
											<u>Latest News</u>
										</div>
										<div class="panel-body">
									<?php
									include("news.php");
									?>
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