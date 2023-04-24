<?php

$servername = "localhost";

// REPLACE with your Database name
$dbname = "smoke";
// REPLACE with Database user
$username = "root";
// REPLACE with Database user password
$password = "";


$value1 = "";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO internal_params (CO,CO2,Acetaldehyde,Formaldehyde) VALUES ('" . $_POST["co"] . "','" . $_POST["co2"] . "' ,'" . $_POST["acetaldehyde"] . "', '" . $_POST["formaldehyde"] . "')";

if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} 
else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>