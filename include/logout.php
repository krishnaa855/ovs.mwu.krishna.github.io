<?php
session_start();

if(isset($_SESSION['user'])){
	session_destroy();
	echo"<script>location.href='second_adminlogin.php'</script>";

}
else{
	echo"<script>location.href='second_adminlogin.php'</script>";

}
?>