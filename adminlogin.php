<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Online Voting System|Home</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="js/jquery/jquery-2.2.4.min.js"></script>
  <script src="js/bootstrap/bootstrap.js"></script>
  <title>Online Voting System|MWU|Admin</title>
  <style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}

.heading{
    font-family: "Roboto", sans-serif;
  font-size: 30px;
  color: #4CAF50;
}


  </style>
</head>
<body>
  <center>
  
  <div class="login-page">
    <?php
session_start();
include("connection.php");
error_reporting(0);
if(isset($_POST['Login']))
{
  $email = $_POST['uname'];
  $pwd = $_POST['pwd'];
  

  $query ="SELECT * FROM admin WHERE username='$email' && password='$pwd'";

  $data = mysqli_query($con,$query);

  $total = mysqli_num_rows($data);
  //echo $total;

  if($total==1)
  {
    header("location:dashboard.php");
    $_SESSION['uname']=$email;

  }
  else
  {
        echo"<div class='alert alert-danger' style='font-size:20px;width:100%;'>Invalid Username and Password</div>";
  }


}

?>


  <div class="form">
   <div class="heading">Admin Login</div>
   <br>
  
    <form class="login-form" method="post">
      <input type="text" name="uname" placeholder="username" required="" />
      <input type="password" name="pwd" placeholder="password" required="" />
      <button name="Login">login</button>
      
    </form>
  </div>
</div>
</center>
</body>
</html>