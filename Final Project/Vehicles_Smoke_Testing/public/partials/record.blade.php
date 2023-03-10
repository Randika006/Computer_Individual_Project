<?php
$con  = mysqli_connect("localhost","root","","smoke");
 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
         $sql ="SELECT * FROM harmful_gas_variation";
         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $gas[]  = $row['gas'];
            $value[] = $row['value'];
            
        }
 
 }
?>