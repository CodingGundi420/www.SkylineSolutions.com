<html>
<body>


<?php


$conn = new mysqli('localhost','root'.'');

if($conn->connect_error)
{
	die("connection failed:" . $conn->conect_error);
}
echo "db connected successfully";





mysqli_select_db($conn,"table");

$id = $_POST['id'];
            $username = $_POST['username'];
			$password = $_POST['password'];
			
			
$sql = "UPDATE signin SET username='$username',password='$password' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>


</body>
</html>