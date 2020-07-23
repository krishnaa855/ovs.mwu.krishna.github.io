<?php
session_start();
if(isset($_SESSION['uname'])){
   
}?>
<?php
include("connection.php");
if(isset($_POST['submit']))
{
    $title= $_POST['title'];
    $DOE = $_POST['DOE'];

   $file=$_FILES["file"]["name"];
   $tmp_name=$_FILES["file"]["tmp_name"];
   $path ="notice/".$file;
   $file1=explode(".",$file);
   $ext=$file1[1];
   $allowed=array("jpeg","jpg","png","gif","pdf","doc");
   if(in_array($ext,$allowed)){
move_uploaded_file($tmp_name,$path);
}

if($file!="")

{
  $sql="INSERT INTO notice (picsource,title,DOE) VALUES('$path','$title','$DOE')";
  $data= mysqli_query($con,$sql);

  if($data)
  {

     echo"<script>alert('New Record Added')</script>";
     header("refresh:2;url=notice.php");
  }
}
             
    else{

     echo"<script>alert('No Record Added')</script>";
    
}
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add Notice</title>
        <link rel="stylesheet" href="css1/bootstrap.css" media="screen" >
        <link rel="stylesheet" href="css1/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css1/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css1/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css1/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
        
        
        </style>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">
            <?php include('topbar.php');?>   
            <div class="content-wrapper">
                <div class="content-container">
<?php include('leftbar.php');?>                   
 <!-- /.left-sidebar -->

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Notice</h2>
                                </div>
                                
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
            						
            							<li class="active">Add Notice</li>
            						</ul>
                                </div>
                               
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">

                             

                              

                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                
                                                <div class="panel-title">
                                                    <h5>Add Notice</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">

                                                <form  name="form-horizontal" method="post" enctype="multipart/form-data">
                                                    <div class="form-group has-success">
                                                        <label for="success" class="control-label">Title</label>
                                                        <div class="">
                                    <input type="text" name="title" class="form-control" required="required" id="success">
                                                      
                                                        </div>
                                                    </div>
                                                    <div class="form-group has-success">
                                                        <label for="success" class="control-label">Choose File</label>
                                                		<div class="">
                                    <input type="file" name="file" class="form-control" required="required" id="success">
                                                      
                                                		</div>
                                                	</div>
                                                       <div class="form-group has-success">
                                                        <label for="success" class="col-sm-2 control-label">Date</label>
                                                        <div class="">
                                                            <input type="date" name="DOE" required="required" class="form-control" id="success">
                                                        </div>
                                                    
                                                    </div>
  <div class="form-group">
                                                        <div class="col-sm-2 control-label">
                                                            <button type="submit" name="submit" class="btn btn-primary">Add</button>
                                                        </div>
                                                    </div>


                                                    
                                                </form>

                                              
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-8 col-md-offset-2 -->
                                </div>
                                <!-- /.row -->

                               
                               

                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                    </div>
                    <!-- /.main-page -->

                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>



        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>

