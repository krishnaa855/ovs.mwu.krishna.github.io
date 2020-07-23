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


if(isset($_POST['insert']))
{


   
    $Name=$_POST['Name'];
    $citizenship =$_POST['citizenship'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $Address=$_POST['Address'];
    $Contact=$_POST['Contact'];
    $email=$_POST['email'];
    $Sex=$_POST['Sex'];
    $DOB=$_POST['DOB'];
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];


    $errors = array();

    $u = "SELECT uname FROM addvoter WHERE uname='$uname'";
    $uu = mysqli_query($con,$u);

    $e = "SELECT email FROM addvoter WHERE email='$email'";
    $ee = mysqli_query($con,$e);

    $p = "SELECT pass FROM addvoter WHERE pass='$pass'";
    $pp = mysqli_query($con,$p);

    if(empty($uname)){
        $errors['u'] = "Username Requires";
    }elseif(mysqli_num_rows($uu)>0){
        $errors['u'] = "Username Exist";
    }

    if(empty($Name)){
        $errors['n'] = "Full Name Requires";
    }

    if(empty($Contact)){
        $errors['c'] = "Contact Requires";
    }
    if(empty($email)){
        $errors['e'] = "Email Requires";
    }elseif(mysqli_num_rows($ee)>0){
        $errors['e'] = "Username Exist";
    }

   
    if(empty($pass)){
        $errors['p'] = "Password Requires";
    }elseif(mysqli_num_rows($pp)>0){
        $errors['p'] = "Username Exist";
    }


    if(empty($DOB)){
        $errors['d'] = "Date Of Birth Requires";
    }

    if(count($errors)==0){

        $sql="INSERT INTO addvoter (Name,mname,lname,Address,Contact,email,citizenship,Sex,DOB,uname,pass) VALUES('$Name','$mname','$lname','$Address','$Contact','$email','$citizenship','$Sex','$DOB','$uname','$pass')";

    if(mysqli_query($con,$sql))
    {
        echo"<script>alert('New Record Added')</script>";
    }
    header("refresh:2;url=registervoter.php");
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <title> Voters Registration Form</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/stylea.css">
    <style >
        
        #form{
            background-color: #84e184;
            min-height: 600px;
            min-width:500px; 
            padding: 3px 40px 40px 40px;
            

        }
        .registration{
            font-size: 55px;
            font-family: Agency FB;
            font-weight: 700;
            border-bottom-style: ridge;; 
        }
        .text{
            height:43px;
        }
        label{
            font-size:18px;
            font-family: Arial;
            text-align: 

        }
        .btn-primary{
            border-radius: 0px;
            padding: 10px;
            width:49%; 
        }
        .btn-danger{
            border-radius: 0px;
            padding: 10px;
            width:49%; 

        }
    </style>
</head>
<body background="/voting/sd.jpg">
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
              <br>  <center><h3 style="color: crimson;"><u>Voters Registration Form</u></h3></center>

                <form  method="POST">


                   <div class="form-group">
                        citi Name:
                        <input type="text" name="citizenship" class="form-control text" autocomplete="off" placeholder="Enter Your First Name">
                         
                    </div>




                    <div class="form-group">
                        First Name:
                        <input type="text" name="Name" class="form-control text" autocomplete="off" placeholder="Enter Your First Name">
                         <p class="text-danger"><?php if(isset($errors['n'])) echo $errors['n'];?></p>
                    </div>
                    <div class="form-group">
                       Middle Name:
                        <input type="text" name="mname" class="form-control text" autocomplete="off" placeholder="Enter Your Middle Name">
                    </div>
                     <div class="form-group">
                        Last Name:
                        <input type="text" name="lname" class="form-control text" autocomplete="off" placeholder="Enter Your Middle Name">
                    </div>
                    <div class="form-group">
                        Email:
                        <input type="text" name="email" class="form-control text" autocomplete="off" placeholder="Enter Your Email Address">
                         <p class="text-danger"><?php if(isset($errors['e'])) echo $errors['e'];?></p>
                    </div>
                    <div class="form-group">
                        Mobile Number:
                        <input type="text" name="Contact" class="form-control text"autocomplete="off" placeholder="Enter Your Mobile Number">
                         <p class="text-danger"><?php if(isset($errors['c'])) echo $errors['c'];?></p>
                    </div>
                    <div class="form-group">
                        Select Gender:
                        <select class="form-control text" name="Sex" required="">
                            <option >--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                            
                        </select>
                         
                    </div>
                    <div class="form-group">
                        UserName:
                        <input type="text" name="uname" class="form-control text" autocomplete="off" placeholder="Enter Your UserName">
                        <p class="text-danger"><?php if(isset($errors['u'])) echo $errors['u'];?></p>
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="Password" name="pass" class="form-control text" autocomplete="off" placeholder="Enter Your Password">
                         <p class="text-danger"><?php if(isset($errors['p'])) echo $errors['p'];?></p>
                    </div>
                    <div class="form-group">
                        <label>DOB:</label>
                        <input type="date" name="DOB" class="form-control text" autocomplete="off" placeholder="Enter Your Date Of Birth" >
                         <p class="text-danger"><?php if(isset($errors['d'])) echo $errors['d'];?></p>
                    </div>
                    <div class="form-group">
                        <label>Address:</label>
                        <textarea class="form-control text" name="Address" autocomplete="off" placeholder="Enter Your Validate Address" rows="2"></textarea>
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