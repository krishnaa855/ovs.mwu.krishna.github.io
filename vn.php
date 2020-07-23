


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	 <?php

include("connection.php");
error_reporting(0);
$query = "SELECT * from notice WHERE noticeno=15";
$data = mysqli_query("$con,$query");
$total= mysqli_num_rows($data);
if($total!=0)
{

	while($re=mysli_fetch_assoc($data))
{

	echo "<img src='".$re['picsource']."' height='400' width='400'>";
}
}else
{
	echo"No result found";
}

?>

</body>
</html>