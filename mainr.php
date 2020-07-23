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
        #form{
            background-color: #84e184;
           
           
          

        }
        .registration{
            font-size: 55px;
            font-family: Agency FB;
            font-weight: 700;
            border-bottom-style: ridge; 
        }
        .text{
            height:30px;
        }
        label{
            font-size:20px;
            font-family: sans-serif;
            text-align: left;

        }
        .btn-primary{
            border-radius: 0px;
            padding: 10px;
            width:49%; 
            height: 40px;
        }
        .btn-danger{
            border-radius: 0px;
            padding: 10px;
            width:49%; 

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
                                    <h2 class="title">Election Result</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                
                                        <li class="active">Election Result</li>
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
                  <td style="font-style: bold;background: pink;font-size: 18px;">SN</td>
                 
                  <td style="font-style: bold;background: pink;font-size: 18px;">Candidate Name</td>
                  <td style="font-style: bold;background: pink;font-size: 18px;">ObtainVote</td>
                  <td style="font-style: bold;background: pink;font-size: 18px;">Wining Status</td>
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
      <td style="font-style: bold;background: pink;font-size: 18px;">
        Total Votes
      </td>
      <td colspan="3" style="font-style: bold;background: pink;font-size: 18px;"><?php  echo $total_vote; ?></td>
    </tr>

      
              
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