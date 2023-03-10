<?php 
//require('mobileReport.php');

//$con= mysqli_connect("localhost","root","","smoke");
//$sql=

$url='localhost';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"smoke");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}

$result = mysqli_query($conn,"SELECT * FROM internal_params");

?>
