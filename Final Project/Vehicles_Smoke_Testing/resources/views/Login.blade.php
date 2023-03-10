<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
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
  <body class="Lbdy1">
    <?php include("./partials/nav2.blade.php"); ?>
    <br/><br/><br/><br/>

    <section class="vh-100">
        <div class="container-fluid h-custom Lbdy">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1" >
                <br/><br/>
              <form  action="login"  method="POST">
                @csrf

                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                  <p class="lead fw-normal mb-0 me-3"><center><font size="23px">Sign in</font></center></p>
                  
                </div>
                    <br/>
               
                    <!-- Username input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3" style="font-size:18px">Username</label>

                  <input type="text" id="form3Example3" name="user" class="form-control form-control-lg"
                    placeholder="Enter a Username" style="border-color: black;width:585px;height:45px;font-size:23px;"/>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-3">
                    <label class="form-label" for="form3Example4"  style="font-size:18px">Password</label>

                  <input type="text" id="form3Example4" name="pass" class="form-control form-control-lg"
                    placeholder="Enter password" style="border-color: black;width:585px;height:45px;font-size:23px;"/>
                </div>
                <br/><br/>
               
                <div class="text-center text-lg-start mt-4 pt-2">
                  <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                  <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="RegisterOfficer" class="link-danger">Register</a></p>
                </div>
      
              </form>
            </div>
          </div>
        </div>
        </section>


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