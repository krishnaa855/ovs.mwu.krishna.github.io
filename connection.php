<?php

$servername="localhost";
$username="root";
$password="";
$dbname="public";


$con= mysqli_connect($servername,$username,$password,$dbname);

if($con)
{

	
}
else{
	echo"Connection failed" .mysqli_connect_error();
}
?>