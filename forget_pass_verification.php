
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<title>Forget Password</title>
	<style>
body{
background: rgb(208,168,3);
background: radial-gradient(circle, rgba(208,168,3,1) 0%, rgba(158,91,171,1) 46%, rgba(128,0,255,1) 100%);
}
}

.bg-dark{
  background-color: transparent !important;
  border: 0px solid transparent !important;
}
	</style>
</head>
<body>
	<section class="vh-lg-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-3 ml-3 mr-3 text-center" style="background:#b8176136;">

            <div class="mb-md-4 mt-md-3 pb-2">

              <h2 class="fw-bold mb-2 text-uppercase">Forget Password</h2>
              <p class="text-white-50 mb-2">Please enter your Details!</p>
              <form method="post" action="">
              <div class="form-outline form-white mb-4">
              	<label>Your Email</label>
                <input type="emial" id="email" name ="email" required placeholder="Your Register Email ID" class="form-control form-control-lg" />
                
              </div>

              <div class="form-outline form-white mb-4">
              	<label >Your Date of Birth</label>
                <input type="date" id="dob" name="dob" required placeholder="Your Date of Birth" class="form-control form-control-lg" />
                
              </div>

              <p class="small mb-2 pb-lg-2"><a class="text-white-50" href="http://localhost/form287/">Go to Home Page</a></p>

              <button class="btn btn-outline-light btn-lg px-5" type="submit" name="next">Next</button>
            </form>

            <?php

            if (isset($_POST['next'])) {
              include "config.php";
              $email = mysqli_real_escape_string($conn,$_POST['email']);
              $dob = $_POST['dob'];

              $sql = "SELECT email, dob FROM user WHERE email ='{$email}' AND dob = '{$dob}'";
              $result =mysqli_query($conn,$sql) or die("Qury Faild");
              if(mysqli_num_rows($result)>0){

                while($row = mysqli_fetch_assoc($result)){
                  session_start();
                  $_SESSION["username"] = $row['email'];
                  

                  
                }

                header("Location: http://localhost/form287/forget_change_pass.php");

              } 
              else{
                 echo '<div class="alert alert-danger"> Your Username  or Date of Birth Does Not Existing Records</div';
               }
            }
            
          ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>