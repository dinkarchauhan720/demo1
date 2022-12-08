
<?php
include "session.php";
include "config.php";

$user_id = $_GET['id'];

$sql = "SELECT * FROM user WHERE id = {$user_id}";
        $result = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

        if (mysqli_num_rows($result)>0) {
          while($row = mysqli_fetch_assoc($result)){
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Update</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<style >
.signup-form h2:before, .signup-form h2:after{
	width:25%

}

</style>

</head>
<body style="background-image: url('sadmin.jpg'); background-repeat: no-repeat; background-size: cover;">
<div class="signup-form" >
    <form style="background: linear-gradient(to bottom, #333300 0%, #003300 100%); background-color: transparent !important;" onkeyup="return validationedit()" onsubmit="return validationedit()" name="myform" action="update_user.php" method="post">
		<h2 style="margin-bottom:8px">Update Data</h2>
		<p class="hint-text" style="margin-bottom:10px">Edit Your Data</p>
        <div class="form-group">
			<div class="row">
				<div class="col">
					<input type="hidden" name="u_id" value="<?php echo $row['id']; ?>">
					<label>New First Name</label>
					<input type="text" class="form-control" required name="first_name" id="fname" value="<?php echo $row['fname'];?>" placeholder="First Name"><small class="text-danger font-weight-bold" id="fnameerr"></small>
				</div>
				<div class="col">
					<label>New Last Name</label>
					<input type="text" class="form-control" required name="last_name" id="lname" value="<?php echo $row['lname'];?>"placeholder="Last Name"><small class="text-danger font-weight-bold" id="lnameerr"></small>
				</div>
			</div>        	
        </div>

        <div class="form-group">
			<div class="row">
				<div class="col">
					<label>New Email</label>
					<input type="email" class="form-control" required name="email" id="email" value="<?php echo $row['email'];?>" placeholder="Email"><small class="text-danger font-weight-bold" id="emailerr"></small>
				</div>
				<div class="col">
					<label>New Mobile Number</label>
					<input type="text" class="form-control" required name="mobile" id="mobile" value="<?php echo $row['mobile'];?>"placeholder="Mobile Number"><small class="text-danger font-weight-bold" id="mobileerr"></small>
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
					<input type="date" class="form-control" name="dob" required="required" value="<?php echo $row['dob'];?>">
				</div>
			</div>        	
        </div>
    
		<div class="form-group" >
            <button type="submit" id="submit" class="btn btn-success btn-lg btn-block">Update</button>
        </div>
    </form>
	<?php
		}
	}

	?>
</div>
<script>
function validationedit(){

		var fname = document.getElementById('fname').value;
		var lname = document.getElementById('lname').value;
		var email = document.getElementById('email').value;
		var mobile = document.getElementById('mobile').value;
		var btn =document.getElementById('submit');
		
		
		var fnamecheck = /^[A-Za-z.]{3,15}$/;
		var lnamecheck = /^[A-Za-z.]{3,30}$/;
		var emailcheck = /^[A-Za-z0-9_.]{3,}@[A-Za-zgmailyahoooutlook]{5,7}[.]{1}[inorgniccom.]{2,6}$/;
		var mobilecheck =  /^[0-9]{3}[-]{1}[0-9]{3}[-]{1}[0-9]{4}$/;

		 // First Name validation
		 if (fnamecheck.test(fname)){
		 	document.myform.first_name.style.backgroundColor = "#b8fcb9";
        	document.getElementById('fnameerr').innerHTML ="";
    	} 
    	else if(fname==""){
    		document.myform.first_name.style.backgroundColor = "white";
        	document.getElementById('fnameerr').innerHTML ="First Name Blank not allow";
        	return false;
    	}
    	else{
    		document.myform.first_name.style.backgroundColor = "#fdd0c9";
        	document.getElementById('fnameerr').innerHTML ="First Name is invalide only character allow and minimus lenth 3";
        	return false;
    	}
    	// Last name validation
    	 if (lnamecheck.test(lname)){
		 	document.myform.last_name.style.backgroundColor = "#b8fcb9";
        	document.getElementById('lnameerr').innerHTML ="";
    	} 
    	else if(lname==""){
    		document.myform.last_name.style.backgroundColor = "white";
        	document.getElementById('lnameerr').innerHTML ="Last Name Blank not allow";
        	return false;
    	}
    	else{
    		document.myform.last_name.style.backgroundColor = "#fdd0c9";
        	document.getElementById('lnameerr').innerHTML ="Last Name is invalide only character allow and minimus lenth 3";
        	return false;
    	}
    	// email validation
    	 if (emailcheck.test(email)){
		 	document.myform.email.style.backgroundColor = "#b8fcb9";
        	document.getElementById('emailerr').innerHTML ="";
    	} 
    	else if(email==""){
    		document.myform.email.style.backgroundColor = "white";
        	document.getElementById('emailerr').innerHTML ="Email Blank not allow";
        	return false;
    	}
    	else{
    		document.myform.email.style.backgroundColor = "#fdd0c9";
        	document.getElementById('emailerr').innerHTML ="Email format is invalide.";
        	return false;
    	}
    	// Mobile Number validation
    	 if (mobilecheck.test(mobile)){
		 	document.myform.mobile.style.backgroundColor = "#b8fcb9";
        	document.getElementById('mobileerr').innerHTML ="";
    	} 
    	else if(mobile==""){
    		document.myform.mobile.style.backgroundColor = "white";
        	document.getElementById('mobileerr').innerHTML ="Mobile No. Blank not allow";
        	return false;
    	}
    	else{
    		document.myform.mobile.style.backgroundColor = "#fdd0c9";
        	document.getElementById('mobileerr').innerHTML ="Mobile No. format is invalide, is formate 123-123-1234";
        	return false;
    	}
    	// Password validation
    	 
    	//Remove Disabled on Register Now Button
    	
    	if (fnamecheck.test(fname) & lnamecheck.test(lname) & emailcheck.test(email) & mobilecheck.test(mobile) {

    		btn.disabled=false;
    	} else{
    		btn.disabled=true;
    	}
	}
</script>
</body>
</html>