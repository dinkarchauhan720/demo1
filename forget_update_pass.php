<?php 

session_start();
$email = $_SESSION["username"];
$u_password = md5($_POST['password']);

if($u_password!=""){

	   include'config.php';  //for database connecte
     
    $sql = "UPDATE user SET password = '{$u_password}' WHERE email = '{$email}'";

    $result = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

    if(isset($result)){

          $_SESSION['status'] = "Generate New Password Successful." ;
          $_SESSION['status_code'] = "success" ;

          header("Location: http://localhost/form287/login.php");
          mysqli_close($conn);
     }else{

          $_SESSION['status'] = "Generate New Password Faild Something Wrong." ;
          $_SESSION['status_code'] = "error" ;

          header("Location: http://localhost/form287/login.php");
          mysqli_close($conn);
     }

}


?>