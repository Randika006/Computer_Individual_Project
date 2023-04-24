<?php
include_once 'Config.php';

if(isset($_POST['save']))
{	 
	 $user = $_POST['user'];
	 $pass = $_POST['pass'];
	 $sql = "INSERT INTO logins (user,pass)
	 VALUES ('$user','$pass')";
	 if (mysqli_query($db, $sql)) {
		//echo "New record created successfully !";
        header("location: officer.php");

	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($db);
	 }
	 mysqli_close($db);
}


?>