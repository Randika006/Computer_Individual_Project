<!doctype html>
<html lang="en">
  <head>
    <title>Vehicles Registration</title>
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

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<link href="/css/style.css" rel="stylesheet"/>
<script src="/js/script.js"></script>

</head>
  <body class="bdy1">
    <?php include("./partials/nav3.blade.php"); ?>
 
    <div class="container bdy">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Vehicles Registration</h3>
			 			</div>
			 			<div class="panel-body">
							<br/>
			    		<form  name="addData" action="add" method="POST"  onsubmit="return validateForm()">
							@csrf

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="ftype" id="ftype" class="form-control input-sm" placeholder="Fuel Type" style="width:336px;">
			    					</div>
			    				</div><hr>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
									
		                          	<input type="text" name="etype" id="etype" class="form-control input-sm" placeholder="Engine Type" style="width:336px;position:absolute;left:-163px;">
			    					</div>
			    				</div>
			    			</div>
							<br/>
			    			<div class="form-group">
			    				<input type="text" name="lnum" id="lnum" class="form-control input-sm" placeholder="License Plate Number" style="width:336px;">
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="vmodel" id="vmodel" class="form-control input-sm" style="width:336px;position:absolute;top:-12px;" placeholder="Vehicles Model">
			    					</div>
			    				</div>
			    			</div>
			    			<br/>
			    			<input type="submit" value="Register" class="btn btn-info btn-block">
							<br/>
							<a class="btn btn-primary BtnView" href="/view" role="button">View Details</a>
			    		
			    		</form>
			    	</div>
	    		</div>
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