


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
                                    <h2 class="title">Candidate Registration</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                
                                        <li class="active">Candidate Registration</li>
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

                                                           <?php
include("connection.php");


if(isset($_POST['insert']))
{

      $code=$_POST['code'];
    $name=$_POST['name'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $address=$_POST['address'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    
    $gender=$_POST['gender'];
    $regno=$_POST['regno'];
    $moto=$_POST['moto'];
   $filename = $_FILES["image"]["name"];
$tempname =$_FILES["image"]["tmp_name"];
$folder = "gallery/".$filename;
move_uploaded_file($tempname, $folder);



    $errors = array();

    

    $e = "SELECT email FROM candidate WHERE email='$email'";
    $ee = mysqli_query($con,$e);

   

    $ci = "SELECT code FROM candidate WHERE code='$code'";
    $cii = mysqli_query($con,$ci);

     $vi = "SELECT regno FROM candidate WHERE regno='$regno'";
    $vii = mysqli_query($con,$vi);


  

     if(empty($code)){
        $errors['ci'] = "Code No. Requires";
    }elseif(mysqli_num_rows($cii)>0){
        $errors['ci'] = "Code No. Exist";
    }

     if(empty($regno)){
        $errors['vi'] = "Registration No, Requires";
    }elseif(mysqli_num_rows($vii)>0){
        $errors['vi'] = "Registration No Exist";
    }

   

   
    if(empty($email)){
        $errors['e'] = "Email Requires";
    }elseif(mysqli_num_rows($ee)>0){
        $errors['e'] = "Email Exist";
    }

   
    


   

    if(count($errors)==0 && $filename!==""){
      // $sql= "INSERT INTO `addvoter`(`citino`, `Name`, `mname`, `lname`, `Address`, `Contact`, `email`, `sex`, `DOB`, `age`, `vin`, `uname`, `pass`) VALUES ([$citino],[$Name],[$mname],[$lname],[$Address],[$Contact],[$email],[$Sex],[$DOB],[$age],[$vin],[$uname],[$pass])";

 $sql="INSERT INTO candidate (code,name,mname,lname,address,contact,email,regno,gender,moto,picsource,fullname) VALUES('$code','$name','$mname','$lname','$address','$contact','$email','$regno','$gender','$moto','$folder','$name $mname $lname')";

    if(mysqli_query($con,$sql))
    {
         echo"<div class='alert alert-success' style='font-size:20px;'>New Candidate Added Sucessfully</div>";
        header("refresh:2;url=canreg.php");
    }else{

    echo"<div class='alert alert-danger' style='font-size:20px;'>No Record Added</div>";
    
}
}
}
?>       

                             <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                             <tr>
                             	
                                 <td><div class="form-group">
                        First Name
                        <input type="text" name="name" class="form-control text" autocomplete="off" placeholder="Enter Your First Name" required="">
                         
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
                        <input type="text" name="contact" class="form-control text"autocomplete="off" placeholder="Eg: 0123456789">
                         <p class="text-danger"><?php if(isset($errors['c'])) echo $errors['c'];?></p>
                    </div></td>
                    <td><div class="form-group">
                        Registration No
                        <input type="text" name="regno" class="form-control text"autocomplete="off" placeholder="Enter Your Citizenship Number">
                         <p class="text-danger"><?php if(isset($errors['ci'])) echo $errors['ci'];?></p>
                    </div></td>
                </tr>
          
                                   <tr>
                                   	<td height="10px"><div class="form-group">
                        Candidate Code
                        <input type="text" name="code" class="form-control text" autocomplete="off" placeholder="Enter Candidate Code">
                         
                    </div></td>
                             
                              <td><div class="form-group">
                        Select Gender:
                        <select class="form-control text" name="gender" required="">
                            <option >--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                            
                        </select>
                        
                         
                    </div>
 </td>
 <td height="10px"><div class="form-group">
                        Image
                        <input type="file" name="image" class="form-control text" autocomplete="off" placeholder="Choose an image of Candidate">
                         
                    </div></td>
               
                         
                   
                             </tr>


                           
                              <tr>
                                 <td colspan="3"><div class="form-group">
                        <label>Address:</label>
                        <textarea class="form-control text" name="address" autocomplete="off" placeholder="Enter Your Validate Address" rows="1" required=""></textarea>
                    </div></td>
                             </tr>
                               <tr>
                                 <td colspan="3"><div class="form-group">
                        <label>Vision:</label>
                        <textarea class="form-control text" name="moto" autocomplete="off" placeholder="Enter Your Validate Address" rows="5" required=""></textarea>
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