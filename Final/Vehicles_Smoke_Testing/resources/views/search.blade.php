<!doctype html>
<html lang="en">
  <head>
    <title>Search</title>
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
  <body class="BdySear">
    <?php include("./partials/nav3.blade.php"); ?>
    <br/><br/>
    <p class="svtitle"><b>Search Vehicles Details</b></p>
        <div class="container Bdys">
            <div class="row">
                   <div class="col-md-6" class="arrange">
                       <!--<h4><center>Search Order Details</center></h4><hr>-->
                      <form action="/search"  method="GET">
                           <div class="form-group"> 
                             <label for="">Enter a Liceanse Plate Number</label>
                             <input type="text" name="lnum" id="" class="form-control" placeholder="Enter a Liceanse Plate Number..."  class="searchtxt " style="border-color: black">
                           </div>
                           <div class="form-group">
                               <button type="submit" class="btn btn-primary"  class="Btnsear">Search</button>
                           </div>

                           <div class="form-group">
							<a class="btn btn-primary ViewAll" href="/view" role="button">View All Details</a>
                          </div>
                    
                       </form>
                       <br>
                       
                       @if(isset($vehicles_details))
    
                       <table id="customers">
                           <thead>
                               <tr>
                                   <th>Fuel Type</th>
                                   <th>Engine Type</th>
                                   <th>License Plate Number</th>
                                   <th>Vehicles Model</th>
                                </tr>
                           </thead>
                           <tbody>
                               @if(count($vehicles_details) >0)
                               @foreach ($vehicles_details as $vehicles_details)
                                   <tr>
                                       <td>{{$vehicles_details->ftype}}</td>
                                       <td>{{$vehicles_details->etype}}</td>
                                       <td>{{$vehicles_details->lnum}}</td>
                                       <td>{{$vehicles_details->vmodel}}</td>
                                       
                                   </tr>
                               @endforeach
    
                                                             
                               @else
                                   <tr><td>No result found!</td></tr>
                               @endif
                              
                           </tbody>
                       </table>
    
    
                       @endif
                   </div>
            </div>
    
        </div>
    
    <br/><br/><br/><br/>
    <br/><br/>
    <br/><br/><br/><br/>
    <br/><br/><br/><br/><br/><br/>
    <br/><br/>
    <br/><br/><br/><br/>
    <br/><br/>


    <?php include("./partials/footer.blade.php"); ?>


</body>
</html>