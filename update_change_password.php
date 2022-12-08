 <?php

 echo $u_id = $_POST['u_id'];
 echo $u_password = md5($_POST['password']);

if($u_password!=""){

     include'config.php';  //for database connecte
     
    $sql = "UPDATE user SET password = '{$u_password}' WHERE id = '{$u_id}'";

   $result = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

    if(isset($result)){

          session_start();
          $_SESSION['status'] = "Change Password Successful." ;
          $_SESSION['status_code'] = "success" ;

          header("Location: http://localhost/form287/admin.php");
          mysqli_close($conn);
     }else{

          session_start();
          $_SESSION['status'] = "Change Password Something Wrong." ;
          $_SESSION['status_code'] = "error" ;

          header("Location: http://localhost/form287/admin.php");
          mysqli_close($conn);
     }

     header("Location: http://localhost/form287/admin.php");
      mysqli_close($conn);
}
?>