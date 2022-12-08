function validation(){

		var fname = document.getElementById('fname').value;
		var lname = document.getElementById('lname').value;
		var email = document.getElementById('email').value;
		var mobile = document.getElementById('mobile').value;
		var password = document.getElementById('password').value;
		var cpassword = document.getElementById('cpassword').value;
		var btn =document.getElementById('submit');
		
		
		var fnamecheck = /^[A-Za-z.]{3,15}$/;
		var lnamecheck = /^[A-Za-z.]{3,30}$/;
		var emailcheck = /^[A-Za-z0-9_.]{3,}@[A-Za-zgmailyahoooutlook]{5,7}[.]{1}[inorgniccom.]{2,6}$/;
		var mobilecheck =  /^[0-9]{3}[-]{1}[0-9]{3}[-]{1}[0-9]{4}$/;
		var passwordcheck = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{7,15}$/;
		var cpasswordcheck = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{7,15}$/;

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
    	
    	if (fnamecheck.test(fname) & lnamecheck.test(lname) & emailcheck.test(email) & mobilecheck.test(mobile) & passwordcheck.test(password) & password==cpassword) {

    		btn.disabled=false;
    	} else{
    		btn.disabled=true;
    	}
	}

// New Second Function


	