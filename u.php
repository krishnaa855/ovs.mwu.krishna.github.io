<?php
session_start();
if(isset($_SESSION['Username'] )){
    $a= $_SESSION['Username'];


}
else{
   
    echo"<script>location.href='subadminlogin.php'</script>";
}
?>



<?php
include("connection.php");
 error_reporting(0);

if(isset($_POST['submit'])){

if(empty($_POST['voted'])){
echo"<script>alert('Must Select One Candidate')</script>";
include"cast.php";
exit();
}
 $lan = $_POST['voted'];
 $user=$_SESSION['Username'];
 $select="SELECT  * from result where user='$user' ";

$exe=mysqli_query($con,$select);
if($exe->num_rows>0){
    ?>
    <?php  echo $row['candidate_name'] ?>
    <?php
   echo"<script>alert('You Have Already Voted....Cannot Vote more than one time ')</script>";
   echo"<script>location.href='userview.php'</script>";
	
}else{


$sql="INSERT INTO result (user,candidate_name) VALUES('$user','$lan')";
$data=mysqli_query($con,$sql);
    if($data)
    {
    	
    	$update="UPDATE candidate SET total_votes=`total_votes`+'1' WHERE fullname='$lan' ";
    	
        $update2="UPDATE addvoter SET Action='VOTED' WHERE uname='$user'";
    	$query=mysqli_query($con,$update);
    	$query2=mysqli_query($con,$update2);
    	
	if($query && $query2){
		 echo"<div class='alert alert-success' style='font-size:20px;'>Thankyou!!!!<br>Successful Voted</div>";
          header("refresh:2;url=http://localhost/voting/userview.php");
	} else{
		echo "failed to vote";
	}
    }
    else{
    	echo "failed";
    }
}
}
    
?>
