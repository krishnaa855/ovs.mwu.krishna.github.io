<?php
session_start();
if(isset($_SESSION['uname'])){
   
}
else{
    echo"<script>location.href='adminlogin.php'</script>";
}
?>

<?php
include("connection.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> Candidate Registration Form</title>
    <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/stylea.css">
    <script src="js/bootstrap.min.js"></script>
    <style>
        body{
            
            background-color: #13395E;
            
        }
        #form{
            background:linear-gradient(red,blue);
            min-height: 600px;
            min-width:500px; 
            padding: 3px 40px 40px 40px;
            

        }
        .registration{
            font-size: 35px;
            font-family: all;
            font-weight: 500;
            border-bottom-style: ridge;
            margin-bottom: 3px;
        }
        .text{
            height:45px;
        }
        label{
        
            font-family: all;
            text-align: left;
            font-size:20px;
            color: solid black;



        }
        .btn-primary{
            border-radius: 3px;
            padding: 10px;
            width:49%;
            background-color: green; 
        }
        .btn-danger{
            background-color: red;
            border-radius: 3px;
            padding: 10px;
            width:49%; 

        }
    </style>
</head>
<body>
    <table align="center" border="2px solid grey" bgcolor="grey" style=";margin-top:50px;background-color:#13395E;border: 01px solid black;">
        <tr>
            <th>
    <div class="w">Online Voting System
        <img class="i" src="/voting/im/flag.gif">
        <img class="j" src="/voting/im/flag.gif">
    </div>
    <div class="container">
        <div class="row" >
            <div class="col-md-12 col-md-offset-6" id="form">
                <?php

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
    $moto=$_POST['moto'];
     $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
$fold = "ga/".$file;
move_uploaded_file($tempname, $fold);


   
if($code!="" && $name!="" && $lname!="" && $address!="" && $contact!="" && $email!="" && $gender!="" && $moto!="")
{


$sql="INSERT INTO candidate (code,name,mname,lname,address,contact,email,gender,picsource,moto) VALUES('$code','$name','$mname','$lname','$address','$contact','$email','$gender','$fold',$moto')";

$data=mysqli_query($con,$sql);
    if($data)
    {
       echo"<div class='alert alert-success' style='font-size:20px;'>New Candidate Added Sucessfully</div>";
    }
}else
    {
        echo"<div class='alert alert-danger' style='font-size:20px;'>No Record Added</div>";
    }

    header("refresh:2;url=http://localhost/voting/regcan.php");
    }

   
      



?>

                <center><b class="registration">Candidate Registration Form</b></center>
                <form  method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label><h4>Candidate  Code:</h4></label>
                        <input type="Number" name="code" class="form-control text" autocomplete="off" placeholder="Enter Candidate's Code">
                        
                    </div>
                    <div class="form-group">
                        <label><h4>First Name:</h4></label>
                        <input type="text" name="name" class="form-control text" autocomplete="off" placeholder="Enter Your First Name">
                        
                    </div>
                    <div class="form-group">
                        <label><h4>Middle Name:</h4></label>
                        <input type="text" name="mname" class="form-control text" autocomplete="off" placeholder="Enter Your Middle Name">
                    </div>
                     <div class="form-group">
                        <label><h4>Last Name:</h4></label>
                        <input type="text" name="lname" class="form-control text" autocomplete="off" placeholder="Enter Your Middle Name">
                    </div>
                    <div class="form-group">
                        <label><h4>Email:</h4></label>
                        <input type="email" name="email" class="form-control text" autocomplete="off" placeholder="Enter Your Email Address">
                        
                    </div>
                    <div class="form-group">
                        <label><h4>Contact Number:</h4></label>
                        <input type="tel" name="contact" class="form-control text"autocomplete="off" placeholder="Enter Your Mobile Number">
                        
                    </div>
                    <div class="form-group">
                        <label><h4>Select Gender:</h4></label>
                        <select class="form-control text" name="gender">
                            <option >--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                            
                        </select>
                         
                    </div>
                    


                    <div class="form-group">
                        <label><h4>Address:</h4></label>
                        <input type="text" name="address" class="form-control text" autocomplete="off" placeholder="Enter Your Full Address" >
                         
                    </div>

                     <div class="form-group">
                        <label><h4>Candidate's Image:</h4></label>
                        <input type="file" name="image" class="form-control text" value="" autocomplete="off" placeholder="Select Image">
           </div>
                

                    

                    <div class="form-group">
                        <label><h4>Candidate Moto:</h4></label>
                        <textarea class="form-control text" name="moto" autocomplete="off" placeholder="Enter Candidate Moto" rows="7"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="insert" class="btn btn-primary" value="Submit">
                        <input type="reset" class="btn btn-danger" value="Reset">
                    </div>

                    
                </form>

            </div>
        </div>
        
    </div>
    <div class="footer">&#169;MWU-BCT2072</div>
</th>
</tr>

</table>

</body>
</html>