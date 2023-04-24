<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
<style>
@import url('https://fonts.googleapis.com/css?family=PT+Sans');

body{
  background: #fff;
  font-family: 'PT Sans', sans-serif;
}
h2{
  padding-top: 1.5rem;
}
a{
  color: #333;
}
a:hover{
  color: #da5767;
  text-decoration: none;
}
.card{
  border: 0.40rem solid #f8f9fa;
  top: 10%;
}
.form-control{
  background-color: #f8f9fa;
  padding: 20px;
  padding: 25px 15px;
  margin-bottom: 1.3rem;
}

.form-control:focus {

    color: #000000;
    background-color: #ffffff;
    border: 3px solid #da5767;
    outline: 0;
    box-shadow: none;

}

.btn{
  padding: 0.6rem 1.2rem;
  background: #da5767;
  border: 2px solid #da5767;
}
.btn-primary:hover {

    
    background-color: #df8c96;
    border-color: #df8c96;
  transition: .3s;

}

.fposition{
    position: relative;
    left:523px;
    top:115px;
}

.tsize{
    height: 2px;
    width:223px;
    font-size:20px;
}

.Cbut{
    font-size:15px;
    font-weight:bold;
}

</style>
<script src="js/script.js"></script>
<link href="css/style.css" rel="stylesheet"/>

  
</head>

<body style="background-image: url('img/nature1.jpg');background-repeat:no-repeat;background-attachment:fixed;background-size:cover;">
<?php include("partial/nav.php"); ?>

<div class="container"  style="background-image: url('img/nature1.jpg');background-repeat:no-repeat;background-attachment:fixed;background-size:cover;">
        <h1><center>Sing Up</center></h1>
        <p><b><center>Register Customer.</center></b></p>
        <br/><br/>

      
        <form name="CusReg" action="process.php" method="post" onsubmit="return validateCustomerReg()">

          <label for="usrname"><font size="5px" color="blue" ><b>Username</b></font></label>
          <input type="text" id="user" name="user" style="border-color: black;font-size:20px;"  required>
      
          <label for="psw"><font size="5px" color="blue"><b>Password</b></font></label>
          <input type="text" id="pass" style="border-color: black;font-size:20px;" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
          <br/><br/>

          <input type="submit" value="Submit" name ="save" class="BtnSub">
          
        </form>
      </div>
      
      <div id="message">
        <h3>Password must contain the following:</h3>
        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
        <p id="number" class="invalid">A <b>number</b></p>
        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
      </div>
      <script src="js/script3.js"></script>
      






<?php include("partial/footer.php"); ?>



</body>
</html>