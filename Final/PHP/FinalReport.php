
<?php include("partial/connection.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FinalReport</title>
    <style>
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 400px;
    font-weight:bold;
    position: relative;
    left:5px;

   }

   td, th {
    border: 2px solid red;
    text-align: left;
    padding: -2px;
    
   }

    tr:nth-child(even) {
    background-color: white;
   }

   .s1{
    position: relative;
    left:130px;
    width:120px;
    height:40px;
   
   }
   .L1{
    position: relative;
    left:40px;
    bottom:-60px;
    font-size:15px;
    font-weight:bold;
   
   }

   .s2{
    position: relative;
    left:130px;
    width:120px;
    height:40px;
    
   }

   .L2{
    position: relative;
    left:-100px;
    bottom:-60px;
    font-size:15px;
    font-weight:bold;
    
   
   }

   .s3{
    position: relative;
    left:130px;
    width:120px;
    height:40px;
    
   }
 
   .s4{
    position: relative;
    left:130px;
    width:120px;
    height:40px;
    
   }

   .L3{
    position: relative;
    left:-100px;
    bottom:-60px;
    font-size:15px;
    font-weight:bold;
   
    }
 
 .L4{
    position: relative;
    left:-110px;
    bottom:-60px;
    font-size:15px;
    font-weight:bold;
     
 } 

 .s5{
    position: relative;
    left:66px;
    width:190px;
    height:40px;
   
 }

 .L5{
    position: relative;
    left:60px;
    bottom:-5px;
    font-size:15px;
    font-weight:bold;
     
 } 
.p1{
    font-size:30px;
    font-weight:bold;
    position: relative;
    left:110px;
    
}

.wbt{
    position: relative;
    left:40px;
    width:170px;
    height:40px;
    top:-798px;
    font-weight:bold;
   
}

.BD {
  margin: 70px;
  border: 2px solid #4CAF50;
  
}

.p2{
    font-size:15px;
    font-weight:bold;
    position: relative;
    left:410px;
    
}

</style>



</head>
<body bgcolor = "#FFFFFF" style="background-image: url('img/nature.jpg');background-repeat:no-repeat;background-attachment:fixed;background-size:cover;">
<?php include("partial/nav2.php"); ?>
  

<?php
if (mysqli_num_rows($result) > 0) {
?>
<br/>

<p class="p1">The Final Report</p>
  <table>
  
  <tr>
    <td>CO (ppm v/v)</td>
    <td>CO2 (ppm v/v)</td>
    <td>Acetaldehyde (ppm v/v)</td>
     <td>Formaldehyde (ppm v/v)</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["CO"]; ?></td>
    <td><?php echo $row["CO2"]; ?></td>
    <td><?php echo $row["Acetaldehyde"]; ?></td>
    <td><?php echo $row["Formaldehyde"]; ?></td>


</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>



<iframe width="380" height="260" style="border: 1px solid #cccccc;position:relative;top:100px;left:20px;" src="https://thingspeak.com/channels/2015529/charts/2?api_key=GQPAZWD1S7ZJE03G"bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line"></iframe>

<iframe width="380" height="260" style="border: 1px solid #cccccc;position:relative;top:100px;left:20px;" src="https://thingspeak.com/channels/2015529/charts/4?api_key=GQPAZWD1S7ZJE03G"bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line"></iframe>

<iframe width="380" height="260" style="border: 1px solid #cccccc;position:relative;top:100px;left:20px;" src="https://thingspeak.com/channels/2015529/charts/3?api_key=GQPAZWD1S7ZJE03G"bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
   
<iframe width="380" height="260" style="border: 1px solid #cccccc;position:relative;top:120px;left:20px;" src="https://thingspeak.com/channels/2015529/charts/1?api_key=GQPAZWD1S7ZJE03G"bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line"></iframe>






        <?php include("partial/dbvalue.php"); ?>


        <br/><br/>
        <br/><br/>
        <br/><br/>
        <br/><br/>
        <br/><br/>






<label class="L1">Fuel Type:</label>
<br/><br/>
<select class="s1" name="">
         <?php 
            while($row= mysqli_fetch_array($result1)){
                echo'<option value="'.$row["ftype"]. '">' .$row["ftype"].'</option>';
            }
                  
         ?>
</select>

<label class="L2">Engine Type:</label>

<br/><br/>

<select class="s2" name="">
         <?php 
            while($row= mysqli_fetch_array($result2)){
                echo'<option value="'.$row["etype"]. '">' .$row["etype"].'</option>';
            }
                  
         ?>
</select>

<label class="L3">License Plate:</label>

<br/><br/>

<select class="s3" name="">
         <?php 
            while($row= mysqli_fetch_array($result)){
                echo'<option value="'.$row["lnum"]. '">' .$row["lnum"].'</option>';
            }
                  
         ?>
</select>

<label class="L4">vehicles model:</label>

<br/><br/>
<select class="s4" name="">
         <?php 
            while($row= mysqli_fetch_array($result3)){
                echo'<option value="'.$row["vmodel"]. '">' .$row["vmodel"].'</option>';
            }
                  
         ?>
</select>
<br/><br/>

<label class="L5">Cost Rs:</label>

<input type="text" id="cost" name="cost" class="s5" >

<br/><br/>
<label for="overall">OVERALL RESULTS:</label>
  <select name="overall" id="overall" style="height:34px;width:100px;font-size:15px;">
    <option value="pass">Pass</option>
    <option value="fail">Fail</option>
    </select>







  <br/><br/>
  <br/><br/>      <br/><br/>
  <br/><br/>      
  <br/><br/>      
  <br/><br/>      
  <br/><br/>      
  <br/><br/>      
  <br/><br/>      
  <br/><br/>      

  <br/><br/>      
  <br/><br/>      
  <br/><br/>      
  <br/><br/>      
  <br/><br/>      
  <br/><br/>  
  <br/><br/>
  <br/><br/>      <br/><br/>
  <br/><br/>      
  <br/><br/>      
  <br/><br/>      
  <br/><br/>      
  <br/><br/>      
  <br/><br/>      
  <br/><br/>      

  <br/><br/>      
  <br/><br/>      
  <br/><br/>      
  <br/><br/>      
  <br/><br/>      
  <br/><br/>      
    

<?php include("partial/footer.php"); ?>

</body>
</html>