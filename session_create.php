<?php 

     if(isset($result)){

          session_start();
          $_SESSION['status'] = "Registration Successful." ;
          $_SESSION['status_code'] = "success" ;

          header("Location: http://localhost/form287/");
          mysqli_close($conn);
     }else{

          session_start();
          $_SESSION['status'] = "Registration Faild Something Wrong." ;
          $_SESSION['status_code'] = "error" ;

          header("Location: http://localhost/form287/");
          mysqli_close($conn);
     }
     
?>