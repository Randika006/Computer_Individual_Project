<?php
   
   include_once 'Config.php';

   if(isset($_POST['save']))
   {	 
        $ftype = $_POST['ftype'];
        $etype = $_POST['etype'];
        $lnum = $_POST['lnum'];
        $vmodel = $_POST['vmodel'];
        $sql = "INSERT INTO vehicles_details (ftype,etype,lnum,vmodel) VALUES ('$ftype','$etype','$lnum','$vmodel')";
        if (mysqli_query($db, $sql)) {
            header("location: VehiclesDetails.php");
        } else {
           echo "Error: " . $sql . "" . mysqli_error($db);
        }
        mysqli_close($db);
   }

?>
