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

if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $npw=$_POST['newpassword'];

    if($password==$npw){



    //$a = password_hash($npw, PASSWORD_BCRYPT);

    $query ="UPDATE admin SET password='$npw' WHERE username='$username'";
    $data = mysqli_query($con,$query);
    if($data)
    {
        echo "<script>alert('Password Changed')</script>";
    
    
   ?>
    <META HTTP-EQUIV="Refresh"CONTENT="0; URL=http://localhost/voting/right_frame.php">
    <?php
}

else
{
   echo "<script>alert('Invalid Username')</script>";

}
}
else{
     echo "<script>alert('Your Newpassword and Confirm Password Doesnot Match')</script>";
      ?>
    <META HTTP-EQUIV="Refresh"CONTENT="0; URL=http://localhost/voting/pwch<?php
session_start();
if(isset($_SESSION['uname'])){
   
}
else{
    echo"<script>location.href='adminlogin.php'</script>";
}
?>.php">
    <?php
}
}

  ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta charset="utf-8">
<head>
    <title>Admin Pannel</title>
    
    <link rel="stylesheet" type="text/css" href="head.css">
    
</head>
<body >
  
        <form  method="post">
            <table align="center">
                <tr>
                    <th colspan="2"><h2 align="center">Admin Change Password</h2></th>
                </tr>
                <tr>
                    <td>Username:
                    <input type="text" name="username" placeholder="Username"></td>
                </tr>
                <tr>
                    <td>New Password:
                    <input type="text" name="password" placeholder="***********"></td>
                </tr>
                <tr>
                    <td>Confirm Password:
                    <input type="Password" name="newpassword" placeholder="***********"></td>
                </tr>
                 
                <tr>
                    <td align="center" colspan="2"><input type="submit" name="login" value="Change"></td>
                </tr>

        </table>
    </form>
    
        


</body>
</html>