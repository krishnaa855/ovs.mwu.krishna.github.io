

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
        


       @media(max-width: 700px){
            #example thead{
                display:none;
            }
            .table, #example tbody, #example tr, #example td{
                display: block;
                
            }
            #example tr{
                margin-bottom: 15px;
            }
            #example td{
                text-align: right;
                padding-left: 50%;
                position: relative;
                font-size: 10px;
            }
            #example td::before{
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 50%;
                padding-left: 15px;
                font-size: 10px;
                font-weight: bold;
                text-align: left;
            }
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
<?php include('leftbar.php');?>  

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
                                        <li> Notice</li>
                                        <li class="active">View Notice</li>
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
                                                    <h5><u>All Notice</u></h5>
                                                </div>
                                            </div>

                                    
                                            <div class="table-responsive">

                                                <table id="example" class="display table table-striped table-bordered" cellspacing="0" >
                                                   <thead>
                                                        <tr>
                                                            <th>SN</th>
                                                            <th>Notice No</th>
                                                            <th>Notice</th>
                                                            <th>Notice Title</th>
                                                            <th>Updated Date</th>
                                                              <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                       <tr>
                                                            <th>SN</th>
                                                            <th>Notice No</th>
                                                            <th>Notice</th>
                                                            <th>Notice Title</th>
                                                            <th>Updated Date</th>
                                                              <th>Action</th>
                                                        </tr>
                                                    </tfoot>

                                               

 

       
       

        <?php
        $con = mysqli_connect('localhost','root','');

        if(!mysqli_select_db($con,'public'))
        {
            echo"Database NOt Selected";
        }

      
       $sql ="SELECT * FROM notice";
       $cnt=1;

        $records=mysqli_query($con,$sql);
       

        while($row=mysqli_fetch_array($records))


        {?>
            
            
                    
            <tr>
               

            <td data-label ="SN"><?php echo($cnt)?></td>
            <?php echo "
            <td data-label =Notice No>".$row['noticeno']."</td>
            ";?>

            
            
          <td data-label='Notice'> <img src="<?php echo $row['picsource'];   ?>" height="50px" width="50px"></td>
           
            <?php
            echo"
            
            <td data-label ='Notice Title'>".$row['title']."</td>
            <td data-label ='Updated Date'>".$row['DOE']."</td>
            <td data-label ='Action'><div style='float:top;'><a  href=' ?dc=$row[noticeno]&Name=$row[picsource]&mname=$row[title]&lname=$row[DOE]'><input type='submit' value='Edit'id='editbtn'></a></div>
            <div style='float:bottom;'>
<a href='?id=$row[noticeno]&email=$row[title]' onclick='return checkdelete()'><input type='submit' value='Delete'id='deletebtn'></a></div>

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
