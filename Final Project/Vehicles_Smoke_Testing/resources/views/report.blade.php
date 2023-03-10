<?php include("./partials/record.blade.php"); ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Arrange the report details</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Link Bootstrap JS and JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script>



<link href="/css/style.css" rel="stylesheet"/>

    </head>
  <body class="bdy1">
    <?php include("./partials/nav3.blade.php"); ?>
    <br/>
    <h1><center>Arrange Final Testing Details</center></h1>
    <br/><br/>     

      <table id="customers">
          <tr>
            <th>CO (ppm v/v)</th>
            <th>CO2 (ppm v/v)</th>
            <th>SO2 (ppm v/v)</th>
            <th>NO2 (ppm v/v)</th>
            <th>Acetaldehyde (ppm v/v)</th>
            <th>Formaldehyde (ppm v/v)</th>
            <!--<th>rate Km/hr</th>
            <th>temperature (Centegrate)</th>
            <th>humidity g/m³</th>-->
            <th>Arrange Results</th>



          </tr>
          @foreach ($RP as $RP)
          <tr>
            <td>{{ $RP->CO}}</td>
            <td>{{ $RP->CO2}}</td>
            <td>{{ $RP->SO2 }}</td>
            <td>{{ $RP->NO2}}</td>
            <td>{{ $RP->Acetaldehyde}}</td>
            <td>{{ $RP->Formaldehyde}}</td>
            <!--<td>{{ $RP->rate}}</td>
            <td>{{ $RP->temperature}}</td>
            <td>{{ $RP->humidity}}</td>-->
            <td><a href = 'delete/{{ $RP->id }}'>Remove</a></td>


           </tr>
          @endforeach
        </table>
       <br/><br/>

        <!--<label for="result" >OVERALL RESULT:</label>
        <select id="result" style="width:233px;height:32px;">
          <option value="Pass">Pass</option>
          <option value="Fail">Fail</option>
         </select>-->


        <br/><br/>
        <!--<p style="position:absolute;bottom:-40px;"><b>Variation Rate (ppm v/v)</b></p>-->
            <!--<div style="width:60%;hieght:20%;text-align:center;">
              <h2 class="page-header">Harmful Gases Variations (ppm v/v)</h2>
              <p style="align:center;"><canvas  id="chartjs_bar"></canvas></p>
              <p><b>gases</b></p>
          </div>-->
         
       <!--<button onclick="window.print()" class="pbut">Print this page</button>-->
       
          <br/>
          <br/><br/><br/><br/>
        <br/><br/>
        <br/><br/><br/><br/>
        <br/><br/><br/><br/><br/><br/>
        <br/><br/>
        <br/><br/><br/><br/>
        <br/><br/>
        <br/><br/><br/><br/>
        <br/><br/>
        <br/><br/><br/><br/>
        <br/><br/><br/><br/>
        <br/><br/><br/><br/>


    <?php include("./partials/footer.blade.php"); ?>
      
    </body>


    <!--<script src="js/jquery.js"></script>
    <script src="js/Chart.min.js"></script>
   <script type="text/javascript">
        var ctx = document.getElementById("chartjs_bar").getContext('2d');
                  var myChart = new Chart(ctx, {
                      type: 'bar',
                 
                      data: {
                          labels:<?php echo json_encode($gas); ?>,
                               
                          datasets: [{
                              backgroundColor: [
                                 "#5969aa",
                                  "#ff407b",
                                  "#331523",
                                  "#ffc750",
                                   "red",
                                   "blue"
                                 ],
                              data:<?php echo json_encode($value);?>,
                             
                          }]
                      },
                 
                      options: {
                             legend: {
                          display: true,
                          position: 'bottom',
   
                          labels: {
                              fontColor: '#71748d',
                              fontFamily: 'Circular Std Book',
                              fontSize: 14,
                          }
                      },
   
   
                  }
                  });
      </script>-->
  
</html>