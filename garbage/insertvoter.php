
<?php
  $con=mysqli_connect('localhost','root','');

  if(!$con)
  {
  	echo'Not connected to Server';
  }
  if(!mysqli_select_db($con,'public'))
  {
  	echo'Database not selected';
  }
  if(isset($_POST['insert']))
    {


  


    $errors = array();

    if(empty($uname)){
        $errors['u'] = "Username Requires";
    }

  	$Name=$_POST['Name'];
  	$Address=$_POST['Address'];
  	$Contact=$_POST['Contact'];
  	$email=$_POST['email'];
  	$Sex=$_POST['Sex'];
  	$DOB=$_POST['DOB'];
  	$uname=$_POST['uname'];
  	$pass=$_POST['pass'];


  	$sql="INSERT INTO addvoter (Name,Address,Contact,email,Sex,DOB,uname,pass) VALUES('$Name','$Address','$Contact','$email','$Sex','$DOB','$uname','$pass')";

  	if(mysqli_query($con,$sql))
  	{
  		echo 'Voter Added Sucessfully';
  	}
  	header("refresh:2;url=registervoter.php");
  }
?>