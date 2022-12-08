<?php

include "session.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Change Password</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style >
.signup-form h2:before, .signup-form h2:after {
	
	width: 15% !important;	
}
</style>
</head>

<body style="background-image: url('bg.jpg'); background-repeat: no-repeat; background-size: cover;">
<div class="signup-form" >
    <form style="background: #031219bf;" onkeyup="return validationpass()" onsubmit="return validationpass()" name="myform" action="forget_update_pass.php" method="post">
    	<div style="border-bottom: 1px solid white;"> <h2 style="margin-bottom:8px">Chnage Password</h2> </div>
    	<p class="hint-text mb-2 mt-2" >Fill The Details</p>
         <div class="form-group">
			<div class="row">
				<div class="col">
					<label>New Password</label>
					
					<input type="password" class="form-control" required id="password" name="password" placeholder="New Password"><small class="text-danger font-weight-bold" id="passworderr"></small>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<label>Conform New Password</label>
					<input type="password" class="form-control" required id="cpassword" name="cpassword" placeholder="Confirm New Password"><small class="text-danger font-weight-bold" id="cpassworderr"></small>
				</div>
			</div>        	
        </div>	

  
	
		<div class="form-group" >
            <button disabled type="submit" name="submit" id="submit" class="btn btn-success btn-lg btn-block">Chnage Password</button>
        </div>
	
</div>
<script>
function validationpass(){
		var password = document.getElementById('password').value;
		var cpassword = document.getElementById('cpassword').value;
		var btn =document.getElementById('submit');
		
		var passwordcheck = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{7,15}$/;
		var cpasswordcheck = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{7,15}$/;

		 
    	// Password validation
    	 if (passwordcheck.test(password)){
		 	document.myform.password.style.backgroundColor = "#b8fcb9";
        	document.getElementById('passworderr').innerHTML ="";
    	} 
    	else if(password==""){
    		document.myform.password.style.backgroundColor = "white";
        	document.getElementById('passworderr').innerHTML ="Password Blank not allow";
        	return false;
    	}
    	else{
    		document.myform.password.style.backgroundColor = "#fdd0c9";
        	document.getElementById('passworderr').innerHTML ="Password is weak";
        	return false;
    	}
    	// Confirm_Password validation
    	 if (cpasswordcheck.test(cpassword) & password==cpassword){
		 	document.myform.cpassword.style.backgroundColor = "#b8fcb9";
        	document.getElementById('cpassworderr').innerHTML ="";
    	} 
    	else if(cpassword==""){
    		document.myform.cpassword.style.backgroundColor = "white";
        	document.getElementById('cpassworderr').innerHTML ="Confirm Password Blank not allow";
        	return false;
    	}
    	else{
    		document.myform.cpassword.style.backgroundColor = "#fdd0c9";
        	document.getElementById('cpassworderr').innerHTML ="Password is not matching";
        	return false;
    	}
    	//Remove Disabled on Register Now Button
    	
    	if (passwordcheck.test(password) & password==cpassword) {

    		btn.disabled=false;
    	} else{
    		btn.disabled=true;
    	}
	}

</script>

</body>
</html>