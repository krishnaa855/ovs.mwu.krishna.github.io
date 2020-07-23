
<?php
session_start();
if(isset($_SESSION['Username'] )){
    echo $_SESSION['Username'];

}
else{
   
    echo"<script>location.href='subadminlogin.php'</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
fg
</body>
</html>