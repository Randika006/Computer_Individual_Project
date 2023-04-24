
<?php include("./partials/connect.blade.php"); ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Final Report</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


     <!-- Bootstrap CSS -->
     
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
          table {
                        font-family: arial, sans-serif;
                        border-collapse: collapse;
                        width: 55%;
                        font-weight: bold;
                        position: relative;
                        left: 223px;
                    }
                    
                    td,
                    th {
                        border: 2px solid red;
                        text-align: left;
                        padding: 8px;
                    }
                    
                    tr:nth-child(even) {
                        background-color: white;
                    }
                    
                    .s1 {
                        position: relative;
                        left: 503px;
                        width: 120px;
                        height: 40px;
                    }
                    
                    .L1 {
                        position: relative;
                        left: 390px;
                        bottom: -60px;
                        font-size: 15px;
                        font-weight: bold;
                    }
                    
                    .s2 {
                        position: relative;
                        left: 503px;
                        width: 120px;
                        height: 40px;
                    }
                    
                    .L2 {
                        position: relative;
                        left: 260px;
                        bottom: -60px;
                        font-size: 15px;
                        font-weight: bold;
                    }
                    
                    .s3 {
                        position: relative;
                        left: 503px;
                        width: 120px;
                        height: 40px;
                    }
                    
                    .s4 {
                        position: relative;
                        left: 503px;
                        width: 120px;
                        height: 40px;
                    }
                    
                    .L3 {
                        position: relative;
                        left: 260px;
                        bottom: -60px;
                        font-size: 15px;
                        font-weight: bold;
                    }
                    
                    .L4 {
                        position: relative;
                        left: 265px;
                        bottom: -60px;
                        font-size: 15px;
                        font-weight: bold;
                    }
                    
                    .s5 {
                        position: relative;
                        left: 440px;
                        width: 190px;
                        height: 40px;
                    }
                    
                    .L5 {
                        position: relative;
                        left: 390px;
                        bottom: -5px;
                        font-size: 15px;
                        font-weight: bold;
                    }
                    
                    .p1 {
                        font-size: 30px;
                        font-weight: bold;
                        position: relative;
                        left: 445px;
                    }
                    
                    .wbt {
                        position: relative;
                        left: 495px;
                        width: 180px;
                        height: 40px;
                        top: -798px;
                        font-weight: bold;
                    }
                    
                    .BD {
                        margin: 70px;
                        border: 2px solid #4CAF50;
                        height: 2000px;
                        
                    }
                    
                    .p2 {
                        font-size: 15px;
                        font-weight: bold;
                        position: relative;
                        left: 410px;
                    }



    </style>

  </head>
  <body class="BD">

    <?php
    if (mysqli_num_rows($result) > 0) {
    ?>
    <br/><br/><br/><br/>
        
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
    
       
    <?php include("./partials/dbvalue.blade.php"); ?>

    <label class="L1">Fuel Type:</label>
    <br/><br/>
    <select class="s1" name="">
      <option value="Petrol">Petrol</option>
      <option value="Desal">Desal</option>
             
    </select>

    <label class="L2">Engine Type:</label>
    
    <br/><br/>
    
    <select class="s2" name="">
        <option value="Petrol Engine">Petrol Engine</option>
        <option value="Desal Engine">Desal Engine</option>
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
    
    
    <label for="result" style="position:relative;top:-305px;left:104px;font-weight:bold;" >OVERALL RESULT:</label>
    <select id="result" style="width:233px;height:32px;font-size:20px;position:relative;left:120px;top:-305px;">
      <option value="Pass">Pass</option>
      <option value="Fail">Fail</option>
     </select>
    <br><br>
    <br><br>
     

    <p class="p2">Harmful Gases Variations Chart Representations</p>
        
    <iframe width="450" height="260" style="border: 1px solid #cccccc;position:relative;left:142px;" src="https://thingspeak.com/channels/2015529/charts/2?api_key=GQPAZWD1S7ZJE03G"bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line"></iframe>
    <br/><br/>
    <br/><br/>
        
    <iframe width="450" height="260" style="border: 1px solid #cccccc;position:relative;left:620px;top:-340px;" src="https://thingspeak.com/channels/2015529/charts/4?api_key=GQPAZWD1S7ZJE03G"bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line"></iframe>
    <br/><br/>
    <br/><br/>
    <br/><br/>
    <br/><br/>

    <iframe width="440" height="260" style="border: 1px solid #cccccc;position:relative;left:154px;top:-396px;" src="https://thingspeak.com/channels/2015529/charts/3?api_key=GQPAZWD1S7ZJE03G"bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
    <br/><br/>
    <br/><br/>
    
    
    <iframe width="450" height="260" style="border: 1px solid #cccccc;position:relative;left:620px;top:-735px;" src="https://thingspeak.com/channels/2015529/charts/1?api_key=GQPAZWD1S7ZJE03G"bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line"></iframe>
    
    <br/><br/>
    <br/><br/>

    <!--<iframe width="430" height="260" style="border: 1px solid #cccccc;position:relative;left:60px;top:-600px;" src="https://thingspeak.com/channels/2015529/charts/6?api_key=GQPAZWD1S7ZJE03G"bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
    <br/><br/>
       
    <iframe width="410" height="260" style="border: 1px solid #cccccc;position:relative;left:510px;top:-890px;" src="https://thingspeak.com/channels/2015529/charts/7?api_key=GQPAZWD1S7ZJE03G"bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>-->
    
    
    
    
    <button onclick="window.print()" class="wbt">Print Report</button>
    
    
    






   </body>
</html>