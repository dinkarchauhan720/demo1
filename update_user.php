 <?php

 echo $u_id = $_POST['u_id'];
 echo $f_name = $_POST['first_name'] ;
 echo $l_name = $_POST['last_name'] ;
 echo $u_email = strtolower($_POST['email']) ;
 echo $u_mobile = $_POST['mobile'] ;
 echo $u_gender = $_POST['gender'] ;
 echo $u_dob = $_POST['dob'] ;
 

if($f_name!=""){

     include'config.php';  //for database connecte
     
    $sql = "UPDATE user SET fname = '{$f_name}', lname = '{$l_name}', email = '{$u_email}', mobile = '{$u_mobile}', gender = '{$u_gender}', dob = '{$u_dob}' WHERE id = '{$u_id}'";

    $result = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

  if(isset($result)){

          session_start();
          $_SESSION['status'] = "Record Update Successful." ;
          $_SESSION['status_code'] = "success" ;

          header("Location: http://localhost/form287/admin.php");
          mysqli_close($conn);
     }else{
          session_start();
          $_SESSION['status'] = "Record Update Faild Something Wrong." ;
          $_SESSION['status_code'] = "error" ;

          header("Location: http://localhost/form287/admin.php");
          mysqli_close($conn);
     }
}
?>