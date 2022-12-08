<?php

echo 'Delete data';
echo "<hr>";
$user_id = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM user WHERE id = '{$user_id}'";
$result = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

if(isset($result)){

          session_start();
          $_SESSION['status'] = "Record Deleted Successful." ;
          $_SESSION['status_code'] = "success" ;

          header("Location: http://localhost/form287/admin.php");
          mysqli_close($conn);
     }else{
          session_start();
          $_SESSION['status'] = "Record Delte Faild Something Wrong." ;
          $_SESSION['status_code'] = "error" ;

          header("Location: http://localhost/form287/admin.php");
          mysqli_close($conn);
     }


?>