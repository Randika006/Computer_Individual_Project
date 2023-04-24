
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
            <th>Acetaldehyde (ppm v/v)</th>
            <th>Formaldehyde (ppm v/v)</th>
          
            <th>Arrange Results</th>



          </tr>
          @foreach ($RP as $RP)
          <tr>
            <td>{{ $RP->CO}}</td>
            <td>{{ $RP->CO2}}</td>
            <td>{{ $RP->Acetaldehyde}}</td>
            <td>{{ $RP->Formaldehyde}}</td>

            <td><a href = 'delete/{{ $RP->id }}'>Remove</a></td>


           </tr>
          @endforeach
        </table>
       <br/><br/>

        <br/><br/>
       
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


   
</html>