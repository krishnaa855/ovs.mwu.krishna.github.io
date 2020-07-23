<?php
include("connection.php");

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Online Voting Sytem Admin| Add Candidate< </title>
        <link rel="stylesheet" href="css1/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css1/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css1/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css1/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css1/prism/prism.css" media="screen" >
        <link rel="stylesheet" href="css1/select2/select2.min.css" >
        <link rel="stylesheet" href="css1/main.css" media="screen" >
        <link rel="stylesheet" type="text/css" media="screen" href="css1/jquery-ui.css">
        <script src="js/jquery.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/modernizr/modernizr.min.js"></script>
        
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
  <?php include('topbar.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

                    <!-- ========== LEFT SIDEBAR ========== -->
                   <?php include('leftbar.php');?>  
                    <!-- /.left-sidebar -->

                    <div class="main-page">

                     <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Feedbacks</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                
                                        <li class="active">Response Feedback</li>
                                    </ul>
                                </div>
                             
                            </div>
                            <!-- /.row -->
                        </div>
                        
                        

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
                             
                                 <td><div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control text" autocomplete="off" placeholder="Enter Your Phone No." required="">
                    </div></td>
                             </tr>


                             <tr >
                              <td colspan="3"><div class="form-group">
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

          



                                                    

        </div>
        <!-- /.main-wrapper -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>
        <script src="js/prism/prism.js"></script>
        <script src="js/select2/select2.min.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>