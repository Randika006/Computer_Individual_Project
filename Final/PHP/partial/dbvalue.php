<?php 

$sql1="select ftype from vehicles_details";
$result1= mysqli_query($conn,$sql1);

$sql2="select etype from vehicles_details";
$result2= mysqli_query($conn,$sql2);



$sql="select lnum from vehicles_details";
$result= mysqli_query($conn,$sql);

$sql3="select vmodel from vehicles_details";
$result3= mysqli_query($conn,$sql3);



 
 
?>
