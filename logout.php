<?php

session_start();

$_SESSION['status'] = "Thanks for using admin pannel" ;
$_SESSION['status_code'] = "success" ;

header("Location: http://localhost/form287/login.php");


?>