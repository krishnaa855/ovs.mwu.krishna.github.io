<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(e){
		$('.has-sub').click(function(){
			$(this).toggleClass('tap');
		});
	};

	</script>

	<style type="text/css">

	*{padding:0; margin:0;}
	a{text-decoration: none; }
	li{ list-style: none;}

	/*nav styling*/
	.main-nav{width: 100%; background:#34495E;}
	.main-nav a {
		display: block;
		padding: 10px 0 10px 20px;
		color:white;
		text-transform: uppercase;
		letter-spacing: .1em;
		border-bottom: 5px solid grey;
		cursor: pointer;
	}
	.main-nav a:hover{
		background:rgba(121,165,160,1.00);
	}
.main-nav-ul ul {
	background:crimson; 
}
	.main-nav-ul ul{
		display: none;
	}
	.main-nav-ul li:hover ul{ display: block; }

	.main-nav-ul ul a:before{
		content: '\203A';
		margin-right: 20px;
	}

	.main-nav .sub-arrow:after{
		content: '\203A';
		float: right;
		margin-right: 20px;
		transform: rotate(90deg);
		-webkit-transform: rotate(90deg);
		-moz-transform: rotate(90deg);
	}

.main-nav li:hover .sub-arrow:after{
 content: '\2039';
}
.main-nav-ul li .tab ul{display: block;}

	</style>
</head>
<body>
	<nav class="main-nav">
		<ul class="main-nav-ul">
			<li><a href="right_frame.php" target="right">DashBoard</a></li>


			<li><a href="">Voter<span class="sub-arrow"></span></a>

				<ul><li><a href="registervoter.php" target="right">Add Voters</a></li>
				<li><a href="voterview.php" target="right">View Voters</a></li>
				<li><a href="">Search Voters</a></li>
			</ul>
			</li>

			<li><a href="">Candidate<span class="sub-arrow"></span></a>

				<ul><li><a href="regcan.php" target="right">Add Candidates</a></li>
				<li><a href="viewcan.php" target="right">View Candidates</a></li>
				<li><a href="">Search Candidates</a></li>
			</ul>
			</li>
			<li><a href="pwch.php" target="right">Change Password</a></li>
			
		</ul>
	</nav>

</body>
</html>