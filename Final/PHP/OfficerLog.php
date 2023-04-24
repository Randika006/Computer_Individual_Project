<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['user']);
      $mypassword = mysqli_real_escape_string($db,$_POST['pass']); 
      
      $sql = "SELECT id FROM logins WHERE user = '$myusername' and pass = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
      //   session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: officer.php");
      }else {
         //$error = "Your Login Name or Password is invalid";
         header("location: error.php");


      }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }

         .fposition{
            position: relative;
            left:5px;
            top:115px;
           }

         .tsize{
            height: 33px;
            width:233px;
            font-size:15px;
          }

        .Cbut{
         font-size:18px;
         font-weight:bold;
         height: 45px;
         width:230px;
           
        }

        


        
        * {
  box-sizing: border-box;
}

.row::after {
  content: "";
  clear: both;
  display: block;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}

html {
  font-family: "Lucida Sans", sans-serif;
}

.header {
  background-color: #9933cc;
  color: #ffffff;
  padding: 15px;
}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  padding: 8px;
  margin-bottom: 7px;
  background-color: #33b5e5;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li:hover {
  background-color: #0099cc;
}

.aside {
  background-color: #33b5e5;
  padding: 15px;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.footer {
  background-color: #0099cc;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
}

/* For desktop: */
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

@media only screen and (max-width: 768px) {
  /* For mobile phones: */
  [class*="col-"] {
    width: 100%;
  }
}


body {
  padding: 10px;
  font-family: 'Calibri';
}

body * {
  box-sizing: none;
}

a,
a:hover,
a:focus,
a:active {
  text-decoration: none;
  color: #555;
}

.win7-btn {
  margin-right: 10px;
  border-radius: 3px;
  border: 1px solid #ddd;
  padding: 3px 15px 3px 15px;
  background: #f2f2f2;
  background: -moz-linear-gradient(top, #f2f2f2 0%, #ebebeb 42%, #dddddd 47%, #cfcfcf 100%);
  background: -webkit-linear-gradient(top, #f2f2f2 0%, #ebebeb 42%, #dddddd 47%, #cfcfcf 100%);
  background: linear-gradient(to bottom, #f2f2f2 0%, #ebebeb 42%, #dddddd 47%, #cfcfcf 100%);
  filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#f2f2f2', endColorstr='#cfcfcf', GradientType=0);
  transition: all 0.1s ease-in;
  border: 1px solid #707070;
}

.win7-btn:hover,
.win7-btn:focus {
  outline: 0;
  background: #eaf6fd;
  background: -moz-linear-gradient(top, #eaf6fd 0%, #d9f0fc 42%, #bee6fd 47%, #bce5fc 58%, #a7d9f5 100%);
  background: -webkit-linear-gradient(top, #eaf6fd 0%, #d9f0fc 42%, #bee6fd 47%, #bce5fc 58%, #a7d9f5 100%);
  background: linear-gradient(to bottom, #eaf6fd 0%, #d9f0fc 42%, #bee6fd 47%, #bce5fc 58%, #a7d9f5 100%);
  filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#eaf6fd', endColorstr='#a7d9f5', GradientType=0);
  border: 1px solid #3C7FB1;
  box-shadow: 0 0 3px #A7D9F5;
  -o-box-shadow: 0 0 3px #A7D9F5;
  -webkit-box-shadow: 0 0 3px #A7D9F5;
  -moz-box-shadow: 0 0 3px #A7D9F5;
}

.win7-btn:active {
  box-shadow: inset 0 -1px 6px rgba(0, 0, 0, 0.2), inset 0 -0.7em #BEE6FD, 0 0 3px #A7D9F5;
  -o-box-shadow: inset 0 -1px 6px rgba(0, 0, 0, 0.2), inset 0 -0.7em #BEE6FD, 0 0 3px #A7D9F5;
  -webkit-box-shadow: inset 0 -1px 6px rgba(0, 0, 0, 0.2), inset 0 -0.7em #BEE6FD, 0 0 3px #A7D9F5;
  -moz-box-shadow: inset 0 -1px 6px rgba(0, 0, 0, 0.2), inset 0 -0.7em #BEE6FD, 0 0 3px #A7D9F5;
}

.winCl-wrap {
  border: 1px solid #000;
  display: inline;
  margin-right: 10px;
  padding-top: 1px;
  padding-bottom: 3px;
  background: #c6c6c6;
}

.winCl-btn {
  border-left: 1px solid #fff;
  border-top: 1px solid #fff;
  border-right: 1px solid #848484;
  border-bottom: 1px solid #848484;
  background-color: transparent;
  padding: 3px 15px 3px 15px;
}

.winCl-btn:hover,
.winCl-btn:focus {
  outline: 0;
}

.winCl-btn:active {
  border-right: 1px solid #fff;
  border-bottom: 1px solid #fff;
  border-left: 1px solid #848484;
  border-top: 1px solid #848484;
}

.winXP-wrap {
  border: 1px solid RGB(1, 63, 102);
  margin-right: 10px;
  border-radius: 3px;
  display: inline;
  margin-right: 10px;
  padding-top: 2px;
  padding-bottom: 4px;
  background: #f6f6f6;
  background: -moz-linear-gradient(top, #f6f6f6 0%, #ffffff 6%, #fffdfe 12%, #fbf9fa 18%, #f8f7f5 41%, #f7f3f0 47%, #f8f3ef 82%, #e7e0d8 94%, #dad3c9 100%);
  background: -webkit-linear-gradient(top, #f6f6f6 0%, #ffffff 6%, #fffdfe 12%, #fbf9fa 18%, #f8f7f5 41%, #f7f3f0 47%, #f8f3ef 82%, #e7e0d8 94%, #dad3c9 100%);
  background: linear-gradient(to bottom, #f6f6f6 0%, #ffffff 6%, #fffdfe 12%, #fbf9fa 18%, #f8f7f5 41%, #f7f3f0 47%, #f8f3ef 82%, #e7e0d8 94%, #dad3c9 100%);
  filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#f6f6f6', endColorstr='#dad3c9', GradientType=0);
}

.winXP-btn {
  padding: 3px 15px 3px 15px;
  border: 2px solid transparent;
  background: transparent;
}

.winXP-btn:hover,
.winXP-btn:focus {
  outline: 0;
  border: 2px solid #B9D0F0;
}

.winXP-btn:active {
  background: #dad3c9;
  background: -moz-linear-gradient(top, #dad3c9 0%, #e7e0d8 6%, #f8f3ef 18%, #f7f3f0 53%, #f8f7f5 59%, #fbf9fa 82%, #fffdfe 88%, #ffffff 94%, #f6f6f6 100%);
  background: -webkit-linear-gradient(top, #dad3c9 0%, #e7e0d8 6%, #f8f3ef 18%, #f7f3f0 53%, #f8f7f5 59%, #fbf9fa 82%, #fffdfe 88%, #ffffff 94%, #f6f6f6 100%);
  background: linear-gradient(to bottom, #dad3c9 0%, #e7e0d8 6%, #f8f3ef 18%, #f7f3f0 53%, #f8f7f5 59%, #fbf9fa 82%, #fffdfe 88%, #ffffff 94%, #f6f6f6 100%);
  filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#dad3c9', endColorstr='#f6f6f6', GradientType=0);
}

.clear {
  height: 10px;
}




      </style>
      <link href="css/style.css" rel="stylesheet"/>

   </head>
   
   <body bgcolor = "#FFFFFF" style="background-image: url('img/nature.jpg');background-repeat:no-repeat;background-attachment:fixed;background-size:cover;">
      <!-- Simulate a smartphone / tablet -->
      <?php include("partial/nav.php"); ?>
	
      <div align = "center" >
         <div style = "width:300px; border: solid 1px #333333;" align = "left" class="fposition">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b><center>Officer Login</center></b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post" >
                  <label>UserName  :</label><input type = "text" name = "user" class = "box tsize"/><br /><br />
                  <label>Password  :</label><input type = "text" name = "pass" class = "box tsize" /><br/><br />
                  <input type ="submit" value ="Login" class="Cbut"/><br /><br/>
                  <!--<a href="OfficerReg.php">Create a Account</a>-->

                  <input class="win7-btn" type="button" value="Create Account" style="height:50px;width:222px;font-size:20px;" onclick="openCA()"/><div class="clear"></div>


               </form>
               
               <!--<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>-->
					
            </div>
				
         </div>
			
      </div>

      <?php include("partial/footer.php"); ?>

<script>
 let myWindow;

 function openCA() {
  myWindow = window.open("OfficerReg.php");
 }

</script>

   </body>
</html>