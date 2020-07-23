<?php
session_start();
error_reporting(0);
if(isset($_SESSION['uid'] )){
    
$a=$_SESSION['uid'];
}
else{
   
   
    echo"<script>location.href='subadminlogin.php'</script>";
}
?>
<?php
include("connection.php");


if(isset($_POST['insert']))
{

    $districtcode=$_POST['districtcode'];
    $Name=$_POST['Name'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $Address=$_POST['Address'];
    $Contact=$_POST['Contact'];
    $email=$_POST['email'];
    $citizenship =$_POST['citizenship'];
    $Sex=$_POST['Sex'];
    $DOB=$_POST['DOB'];
    $age=$_POST['age'];
    $voterno=$_POST['voterno'];
    
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];


    $errors = array();

    $u = "SELECT uname FROM addvoter WHERE uname='$uname'";
    $uu = mysqli_query($con,$u);

    $e = "SELECT email FROM addvoter WHERE email='$email'";
    $ee = mysqli_query($con,$e);

    $p = "SELECT pass FROM addvoter WHERE pass='$pass'";
    $pp = mysqli_query($con,$p);

    $ci = "SELECT citizenship FROM addvoter WHERE citizenship='$citizenship'";
    $cii = mysqli_query($con,$ci);

     $vi = "SELECT voterno FROM addvoter WHERE voterno='$voterno'";
    $vii = mysqli_query($con,$vi);


    if(empty($uname)){
        $errors['u'] = "Username Requires";
    }elseif(mysqli_num_rows($uu)>0){
        $errors['u'] = "Username Exist";
    }

     if(empty($citizenship)){
        $errors['ci'] = "Citizenship No. Requires";
    }elseif(mysqli_num_rows($cii)>0){
        $errors['ci'] = "Citizenship No. Exist";
    }

     if(empty($voterno)){
        $errors['vi'] = "Voter-ID Requires";
    }elseif(mysqli_num_rows($vii)>0){
        $errors['vi'] = "Voter-ID Exist";
    }

   

    if(empty($Contact)){
        $errors['c'] = "Contact Requires";
    }
    if(empty($email)){
        $errors['e'] = "Email Requires";
    }elseif(mysqli_num_rows($ee)>0){
        $errors['e'] = "Email Exist";
    }

   
    if(empty($pass)){
        $errors['p'] = "Password Requires";
    }elseif(mysqli_num_rows($pp)>0){
        $errors['p'] = "Username Exist";
    }


   

    if(count($errors)==0){
      

 $sql="INSERT INTO addvoter (districtcode,Name,mname,lname,Address,Contact,email,citizenship,Sex,DOB,age,voterno,uname,pass) VALUES('$districtcode','$Name','$mname','$lname','$Address','$Contact','$email','$citizenship','$Sex','$DOB','$age','$voterno','$uname','$pass')";

    if(mysqli_query($con,$sql))
    {
        echo"<script>alert('New Record Added')</script>";
        header("refresh:0;url=dashboardsub.php");
    }else{

     echo"<script>alert('No Record Added')</script>";
    
}
}
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Online Voting Sytem Admin| Add Voters< </title>
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
                   <?php include('include/leftbar1.php');?>  
                    <!-- /.left-sidebar -->

                    <div class="main-page">

                     <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Voter Registration</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                
                                        <li class="active">Voter Registration</li>
                                    </ul>
                                </div>
                             
                            </div>
                            <!-- /.row -->
                        </div>
                        
                        

                         <table border="0">
                            

<div class="container-fluid">
                           
                        <div class="row">
                                    <div class="col-md-12">
                                       <br>

                                                                  

                            <form class="form-horizontal" method="POST">
                                <tr>
                             
                              <td><div class="form-group">
                        District Code:
                        <select class="form-control text" name="districtcode" required="">
                            <?php
                             $sql ="SELECT * FROM district WHERE dname='$a' ";
       

        $records=mysqli_query($con,$sql);
       

        while($row=mysqli_fetch_array($records))


        {
       
echo "
            <option>".$row['dname']."</option>";
        }
        ?>
            
            
                    
            






                                       
                            
                           
                            
                        </select>
                        
                         
                    </div>
 </td>
           </tr>
                             <tr>
                                 <td height="10px"><div class="form-group">
                        First Name
                        <input type="text" name="Name" class="form-control text" autocomplete="off" placeholder="Enter Your First Name" required="">
                         
                    </div></td>
                            
                              
                                 <td><div class="form-group">
                       Middle Name
                        <input type="text" name="mname" class="form-control text" autocomplete="off" placeholder="Enter Your Middle Name">
                    </div></td>
                             
                                 <td><div class="form-group">
                        Last Name
                        <input type="text" name="lname" class="form-control text" autocomplete="off" placeholder="Enter Your Last Name" required="">
                    </div></td>
                             </tr>
                              <tr>
                                 <td><div class="form-group">
                        Email:
                        <input type="text" name="email" class="form-control text" autocomplete="off" placeholder="Eg:abc@gmail.com">
                         <p class="text-danger"><?php if(isset($errors['e'])) echo $errors['e'];?></p>
                    </div></td>
                    
                                 <td><div class="form-group">
                        Mobile Number:
                        <input type="text" name="Contact" class="form-control text"autocomplete="off" placeholder="Eg: 0123456789">
                         <p class="text-danger"><?php if(isset($errors['c'])) echo $errors['c'];?></p>
                    </div></td>
                    <td><div class="form-group">
                        Citizenship No
                        <input type="text" name="citizenship" class="form-control text"autocomplete="off" placeholder="Enter Your Citizenship Number">
                         <p class="text-danger"><?php if(isset($errors['ci'])) echo $errors['ci'];?></p>
                    </div></td>
                </tr>
          
                                   <tr>
                             
                              <td><div class="form-group">
                        Select Gender:
                        <select class="form-control text" name="Sex" required="">
                            <option >--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                            
                        </select>
                        
                         
                    </div>
 </td>
           
                                 <td><div class="form-group">
                        <label>DOB:</label>
                        <input type="date" name="DOB"  class="form-control text" autocomplete="off" placeholder="Enter Your Date Of Birth" required="" >
                        
                    </div></td>
                     <td><div class="form-group">
                        <label>AGE</label>
                        <input type="text" name="age"  class="form-control text" autocomplete="off"  required="">
                         
                    </div></td>
                             </tr>


                             <tr>
                <td>
                         
                    </div> <div class="form-group">
                        UserName:
                        <input type="text" name="uname" class="form-control text" autocomplete="off" placeholder="Enter Your UserName">
                        <p class="text-danger"><?php if(isset($errors['u'])) echo $errors['u'];?></p>
                    </div></td>
                             
                                 <td> <div class="form-group">
                        <label>Password:</label>
                        <input type="Password" name="pass" class="form-control text" autocomplete="off" placeholder="Enter Your Password">
                         <p class="text-danger"><?php if(isset($errors['p'])) echo $errors['p'];?></p>
                    </div></td>

                    <td><div class="form-group">
                        Voter-ID No
                        <input type="text" name="voterno" class="form-control text"autocomplete="off" placeholder="Enter Your Voter-ID Number">
                         <p class="text-danger"><?php if(isset($errors['vi'])) echo $errors['vi'];?></p>
                    </div></td>
                             </tr>
            


                              <tr>
                                 <td colspan="3"><div class="form-group">
                        <label>Address:</label>
                        <textarea class="form-control text" name="Address" autocomplete="off" placeholder="Enter Your Validate Address" rows="1" required=""></textarea>
                    </div></td>
                             </tr>
                              <tr>
                                 <td colspan="3"> <div class="form-group">
                        <input type="submit" name="insert" class="btn btn-primary" value="Submit">
                        <input type="reset" class="btn btn-danger" value="Reset">
                    </div></td>
                             </tr>
                              
                         </form>
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