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
        
         <style>
    #head{
      min-width: auto;
      min-height:50px;
      text-align: center;
      background-color: grey;
      font-size: 60px;
      border-bottom: 1px solid #BDC3C7;
      border-top: 5px solid #BDC3C7;
      font-family: all;
      margin-top: 0

    }
    #editbtn{
      background-color: green;
      color: white;
      width:200px;
      font-size: 18px;
    }
   
    .i{
      float:left;
      height: 60px;
      margin-left: 10pt;
      padding: 0;
    }
    .j{
      float:right;
      height: 60px;
      margin-right: 4pt;
      padding: 0;
    }
    .footer
    {
      min-height:30px;
      width:auto; 
      text-align: right;
      background-color: grey;
      font-size: 20px;
      border-bottom: 5px solid #BDC3C7;
      border-top: 5px solid #BDC3C7;
      font-family: all;
      margin-top: 0;
      padding-right: 30pt;
      padding-top: 4pt;

    }


  </style>
    
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
                        
                        

                           <table class="table table-responsive table-hover table-bordered text-center">
                            

<div class="container-fluid">
                           
                        <div class="row">
                                    <div class="col-md-12">
                                       <br>

                             
                <tr>
               
                 
                  <td style="font-style: bold;background: pink;font-size: 18px;">Name</td>
                  <td style="font-style: bold;background: pink;font-size: 18px;">Email</td>
                  <td style="font-style: bold;background: pink;font-size: 18px;">Phone</td>
                  <td style="font-style: bold;background: pink;font-size: 18px;">Action</td>

             <?php
    include("connection.php");
    error_reporting(0);
    

    

    $sql="SELECT * FROM contact";

    $records=mysqli_query($con,$sql);

    while($row=mysqli_fetch_array($records))
    {
      echo"
      <tr>
     
      <td>".$row['name']."</td>
     
      <td>".$row['email']."</td>
    
      <td>".$row['phone']."</td>
      <td><a  href='#?code=$row[id]&name=$row[name]&email=$row[email]&phone=$row[phone]&subject=$row[subject]&msg=$row[msg]'><input type='submit' value='View/Response'id='editbtn'></a></td>
     
      </tr>";
    }
?>

      
              
                     </div>
                 </div>
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