
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Customer Login Page</title>
   <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Link Bootstrap JS and JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
</script>

   
    <!--Custom styles-->
    <link href="/css/style.css" rel="stylesheet"/>
</head>
<body class="CusLogbdy1">
    <?php include("./partials/nav2.blade.php"); ?>
    <section class="vh-100">
        <br/><br/>
        <div class="container-fluid CusLogbdy">
          <div class="row">
            <div class="col-sm-6 text-black">
      
             
              <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
      
                <form action="CusLog"  method="POST" style="width: 23rem;">
                  @csrf

                  <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;position: absolute;left:223px;font-size:40px;font-weight:bold;">Log in</h3>
                   <br/><br/><br/><br/><br/>
                  <div class="form-outline mb-4" >
                    <label class="form-label" for="form2Example18" style="font-size:18px;">Username</label>
                    <input type="text" id="user" name="user"  class="form-control form-control-lg"  style="border-color:black;width:575px;height:45px;font-size:23px;" placeholder="Username"/>
                  </div>
      
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example28" style="font-size:18px">Password</label>

                    <input type="text" id="pass" name="pass" class="form-control form-control-lg" style="border-color:black;width:575px;height:45px;font-size:23px;" placeholder="Password" />
                  </div>
                   <br/>
                  <div class="pt-1 mb-4">
                    <button class="btn btn-info btn-lg btn-block" type="submit" style="font-size:22px;">Login</button>
                  </div>
                    <br/>
                  <p>Don't have an account? <a href="/CusReg" class="link-info">Register here</a></p>
      
                </form>
      
              </div>
      
            </div>
            <br/>
            <div class="col-sm-6 px-0 d-none d-sm-block">
              <img src="/img/nature2.jpg" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
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