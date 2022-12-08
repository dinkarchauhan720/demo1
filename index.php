<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Registration Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<style >
.signup-form h2:before, .signup-form h2:after {
	
	width: 20% !important;
	
}
</style>
</head>

<body style="background-image: url('bg.jpg'); background-repeat: no-repeat; background-size: cover;">
<div class="signup-form" >
    <form style="background: #031219bf;" onkeyup="return validation()" onsubmit="return validation()" name="myform" action="savedata.php" method="post">
		<h2 style="margin-bottom:8px">Admin Register</h2>
		<p class="hint-text" style="margin-bottom:10px">Create your account.</p>
        <div class="form-group">
			<div class="row">
				<div class="col">
					<label>First Name</label>
					<input type="text" class="form-control" required name="first_name" id="fname" placeholder="First Name"><small class="text-danger font-weight-bold" id="fnameerr"></small>
				</div>
				<div class="col">
					<label>Last Name</label>
					<input type="text" class="form-control" required name="last_name" id="lname" placeholder="Last Name"><small class="text-danger font-weight-bold" id="lnameerr"></small>
				</div>
			</div>        	
        </div>

        <div class="form-group">
			<div class="row">
				<div class="col">
					<label>Your Email</label>
					<input type="email" class="form-control" required name="email" id="email" placeholder="Email"><small class="text-danger font-weight-bold" id="emailerr"></small>
				</div>
				<div class="col">
					<label>Your Mobile Number</label>
					<input type="text" class="form-control" required name="mobile" id="mobile" placeholder="Mobile Number"><small class="text-danger font-weight-bold" id="mobileerr"></small>
				</div>
			</div>        	
        </div>
        <div class="form-group">
			<div class="row">
				<div class="col">
					<label>Gender</label><br>
					<input type="radio"  name="gender" value="1" checked> Male <input type="radio"  name="gender" value="0"> Female
				</div>
				<div class="col">
					<label>Date of Birth</label>
					<input type="date" class="form-control" name="dob" required="required">
				</div>
			</div>        	
        </div>

         <div class="form-group">
			<div class="row">
				<div class="col">
					<input type="password" class="form-control" required id="password" name="password" placeholder="Password"><small class="text-danger font-weight-bold" id="passworderr"></small>
				</div>
				<div class="col">
					<input type="password" class="form-control" required id="cpassword" name="cpassword" placeholder="Confirm Password"><small class="text-danger font-weight-bold" id="cpassworderr"></small>
				</div>
			</div>        	
        </div>	

        <div class="form-group">
			<label class="form-check-label"><input type="checkbox" required="required" name="terms" > I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="row justify-content-center cmargin " style="margin-bottom:16px">
              <div class="g-recaptcha" data-sitekey="6LenJTIiAAAAAA9FyJKMd8ZH7RWM-CZxBDun4MG5"></div>
        </div>
		<div class="form-group" >
            <button disabled type="submit" name="submit" id="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
        <div class="text-center" style="color:black;">Already have an Your account? <br> <a href="login.php" style="color:#9DA29D;">Admin Login</a> || <a href="super_admin_login.php" style="color:#9DA29D;">Super Admin Login</a></div>
    </form>	
</div>
<script src="custome.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script> <!-- For Captcha -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> <!-- For Sweet Alert -->

<?php 

include 'session_user_footer.php';

?>

</body>
</html>