<html>
<body>

<?php

$conn = new mysqli('localhost','root'.'');

mysqli_select_db($conn,"table");

$id = $_POST['id'];
            
            $sql="DELETE FROM signin WHERE id='$_GET[id]'";
   
   if(mysqli_query($conn,$sql))
   {
	   
		   echo"deleted successfully";
	   }
	   else {
		   echo "error";
		   mysqli_error($conn, $sql);
		  
	   }
   
   
            mysqli_close($conn);
?>
</body>
</html>