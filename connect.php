<?php

$conn = new mysqli('localhost','root'.'');

if($conn->connect_error)
{
	die("connection failed:" . $conn->conect_error);
}
echo "db connected successfully";

	   
   mysqli_close($conn);

?>
