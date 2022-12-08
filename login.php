<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<title>Login Page</title>
	<style>
.gradient-custom {
/* fallback for old browsers */
background: #6a11cb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
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

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-2">Please enter your login ID and password!</p>
              <form method="post" action="">
              <div class="form-outline form-white mb-4">
              	<label>Email</label>
                <input type="email" id="email" name ="username" required placeholder="Your user name" class="form-control form-control-lg" />
                
              </div>

              <div class="form-outline form-white mb-4">
              	<label >Password</label>
                <input type="password" id="typePasswordX" name="password" required name="password" placeholder="Password" class="form-control form-control-lg" />
                
              </div>

              <p class="small mb-2 pb-lg-2"><a class="text-white-50" href="forget_pass_verification.php">Forgot password?</a></p>

              <button class="btn btn-outline-light btn-lg px-5" type="submit" name="login">Login</button>
            </form>

            <?php

            if (isset($_POST['login'])) {
              include "config.php";
              $username = mysqli_real_escape_string($conn,$_POST['username']);
              $password = md5($_POST['password']);  //  $_POST['password'] ;

              $sql = "SELECT email, fname FROM user WHERE email ='{$username}' AND password = '{$password}'";
              $result =mysqli_query($conn,$sql) or die("Qury Faild");
              if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
                  session_start();
                  $_SESSION["username"] = $row['email'];
                  $_SESSION["name"] = $row['fname'];

                  header("Location: http://localhost/form287/admin.php");
                }

              } 
              else{
                 echo '<div class="alert alert-danger">User name or password is wrong</div';
               }
            }

          ?>
            </div>

            <div>
              <p class="mb-0">Don't have an account? <a href="index.php" class="text-white-50 fw-bold">Sign Up</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> <!-- For Sweet Alert -->

<?php 
session_start();

include 'session_user_footer.php';

?>

</body>
</html>