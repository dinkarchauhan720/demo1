<?php
  
     $f_name = $_POST['first_name'] ;
     $l_name = $_POST['last_name'] ;
     $u_email = strtolower($_POST['email']) ;
     $u_mobile = $_POST['mobile'] ;
     $u_gender = $_POST['gender'] ;
     $u_dob = $_POST['dob'] ;
     $u_password = md5($_POST['password']);

if($f_name!=""){

     include'config.php';  //for database connecte
     
    $sql = "INSERT INTO user(fname,lname,email,mobile,gender,dob,password) VALUES ('{$f_name}','{$l_name}','{$u_email}','{$u_mobile}','{$u_gender}','{$u_dob}','{$u_password}')";

    $result = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

include 'session_create.php';    
}
header("Location: http://localhost/form287/");
?>