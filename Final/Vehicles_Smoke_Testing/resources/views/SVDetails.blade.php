<!doctype html>
<html lang="en">
  <head>
    <title>Show Vehicles Details</title>
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
    <h1><center>Vehicles Details</center></h1>
    <br/><br/> 
    <h3><b><a href="/add">+ Add Vehicles Details</a></b></h3>     
    <p class="sear"><a href="/search">+ Search Vehicles Details</a></p>

      <table id="customers">
          <tr>
            <th>Fuel Type</th>
            <th>Engine Type</th>
            <th>License Plate Number</th>
            <th>Vehicles Model</th>
            <th>Edit</th>
            <th>Remove</th>



          </tr>
          @foreach ($SVD as $SVD)
          <tr>
            <td>{{ $SVD->ftype }}</td>
            <td>{{ $SVD->etype }}</td>
            <td>{{ $SVD->lnum }}</td>
            <td>{{ $SVD->vmodel }}</td>
            <td><a href = 'edit/{{ $SVD->id }}'>Edit</a></td>
            <td><a href = 'remove/{{ $SVD->id }}'>Delete</a></td>

          </tr>
          @endforeach
        </table>


        <br/><br/><br/><br/>
        <br/><br/>
        <br/><br/><br/><br/>
        <br/><br/><br/><br/><br/><br/>
        <br/><br/>
        <br/><br/><br/><br/>
        <br/><br/>
        <br/><br/><br/><br/>
        <br/><br/>
    <?php include("./partials/footer.blade.php"); ?>
      
    </body>
</html>