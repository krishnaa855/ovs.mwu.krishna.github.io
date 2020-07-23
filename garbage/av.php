
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
    $moto=$_POST['moto'];
    $image=$_POST['image'];
    $logo=$_POST['logo'];


    

         $sql="INSERT INTO addcan (code,name,mname,lname,address,contact,email,gender,moto,image,logo) VALUES('$code''$name','$mname','$lname','$address','$contact','$email','$gender','$moto','$image','$logo')";

    if(mysqli_query($con,$sql))
    {
        echo"<script>alert('New Record Added')</script>";
    }
    header("refresh:2;url=http://localhost/voting/cand/regcan.php");
    }

?>