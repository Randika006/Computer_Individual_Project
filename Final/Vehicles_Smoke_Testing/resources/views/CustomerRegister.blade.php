<!doctype html>
<html lang="en">
  <head>
    <title>Register Officer</title>
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

<script src="/js/RegCus.js"></script>

     </head>
  <body class="CusRegbdy1">
    <?php include("./partials/nav2.blade.php"); ?>
    <br/><br/> 

      
      <div class="container CusRegbdy">
        <h1><center>Sing Up</center></h1>
        <p><b><center>Register Customer.</center></b></p>
        <br/><br/>

      
        <form name="CusReg" action="CusReg" method="POST" onsubmit="return validateCustomerReg()">
            @csrf

          <label for="usrname"><font size="4px">Username</font></label>
          <input type="text" id="user" name="user" style="border-color: black;font-size:20px;"  required>
      
          <label for="psw"><font size="4px">Password</font></label>
          <input type="text" id="pass" style="border-color: black;font-size:20px;" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
          <br/><br/>

          <input type="submit" value="Submit" class="BtnSub">
          
        </form>
      </div>
      
      <div id="message">
        <h3>Password must contain the following:</h3>
        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
        <p id="number" class="invalid">A <b>number</b></p>
        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
      </div>
      <script src="/js/script3.js"></script>
      
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