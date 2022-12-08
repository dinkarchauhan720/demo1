<!-- Savedata.php or insert data in database-->
<?php
if($result){

session_start();
$_SESSION['status']= "Registration Seccessfully.";
$_SESSION['status_code'] = "success";
header("location: http://localhost/form287");

}
else{

$_SESSION['status']= "Registration Faild.";
$_SESSION['status_code'] = "error";
header("location: http://localhost/form287");

}
?>


<!-- index.php or redirect page after insert data -->
<?php 

session_start();
?>

// button  of page or footer area.
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php 
if(isset($_SESSION['status']) && $_SESSION['status']!=""){
?>

<script>
swal({
  title: "<?php echo $_SESSION['status']; ?>",
  // text: "You clicked the button!",
  icon: "<?php echo $_SESSION['status_code']; ?>",
  button: "Ok Done",
});

</script>

<?php
unset($_SESSION['status']);
}
?>