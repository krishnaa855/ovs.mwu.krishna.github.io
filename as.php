<?php
session_start();
error_reporting(0);
if(isset($_SESSION['email'] )){
    
$a= $_SESSION['email'];
}
else{
    
   
    echo"<script>location.href='../index.php'</script>";
}
?>

<?php
include("../config.php");


$w="SELECT * FROM teacher where username='$a' ";
$d=mysqli_query($con,$w);
 while($row=mysqli_fetch_array($d))
    {?>
        <?php $b=$row['name'];

 }
echo $b;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Online Voting System| View Voter</title>
        <link rel="stylesheet" href="css1/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css1/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css1/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css1/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css1/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="css1/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
        <style>
      
        #editbtn{
            background-color: green;
            color: white;
            width:80px;
            font-size: 12px;
        }
        #deletebtn{
            background-color: red;
            color: white;
             width:80px;
            font-size: 12px;
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
<?php include('include/leftbar1.php');?>  

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">View Voters</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                        <li> Voters</li>
                                        <li class="active">View Voters</li>
                                    </ul>
                                </div>
                             
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">

                             

                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">

                    
                                                </div>
                                            </div>

                                    
                                            <div class="panel-body p-20">

                                                <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                                                   <thead>
                                                        <tr>
                                                            <th>SN</th>
                                                            <th>Title</th>
                                                            
                                                            <th>Faculty</th>
                                                            <th>Semester</th>
                                                            <th>Subject</th>
                                                            <th>Uploaded By</th>
                                                            <th>Note</th>
                                                              <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                           <th>SN</th>
                                                           <th>Title</th>
                                                            
                                                            <th>Faculty</th>
                                                            <th>Semester</th>
                                                            <th>Subject</th>
                                                            <th>Uploaded By</th>
                                                            <th>Note</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </tfoot>

                                               

 

       
       

        <?php
        include("//config.php");
        


   
    $query = "SELECT * FROM notes WHERE teachername='$b'";
    $cnt=1;
    $query_run= mysqli_query($con,$query);

    while($row=mysqli_fetch_array($query_run))


        {?>
            
            
                    
            <tr>
               

            <td><?php echo($cnt)?></td>
            <?php echo "
            <td>".$row['title']."</td>";?>
            <?php
            echo"
            <td>".$row['faculty']."</td>
            <td>".$row['semester']."</td>
            <td>".$row['subject']."</td>
            <td>".$row['teachername']."</td>
            <td>".$row['note']."</td>
           

            <td><a  href='updatesub.php?&title=$row[title]&faculty=$row[faculty]&note=$row[note]&teacher=$row[teachername]&semester=$row[semester]&subject=$row[subject]'><input type='submit' value='Edit'id='editbtn'></a></div>
            
            </td>

            "?>





           <?php
           echo "
              </tr>";
                
    $cnt=$cnt+1;}
     

       ?>



           
        



                                                       
                                                    
                                                    </tbody>
                                                </table>
                                         <!-- /.col-md-12 -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-6 -->

                                                               
                                                </div>
                                                <!-- /.col-md-12 -->
                                            </div>
                                        </div>
                                        <!-- /.panel -->
                                    </div>
                                    <!-- /.col-md-6 -->

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
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>
        <script src="js/DataTables/datatables.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
            <script>
            $(function($) {
                $('#example').DataTable();

                $('#example2').DataTable( {
                    "scrollY":        "300px",
                    "scrollCollapse": true,
                    "paging":         false
                } );

                $('#example3').DataTable();
            });
        </script>
        <script type>
        function checkdelete()
        {
            return confirm('Do you want to delete record!!!!!');
        }
    </script>
    </body>
</html>
