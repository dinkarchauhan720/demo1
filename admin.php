<?php

include "session.php";

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    
	<title>Welcome|| Management Page</title>
</head>
<style>
body{
    background-color: #565;
}
.head{
    color:#C2C7C1; 
    text-align: center;
    font-size: 35px;
    text-transform: uppercase;
    letter-spacing: 10px;


}
.head:hover{
    font-size: 38px;
    color: black;
    transition: 0.9s;
}
.hd{
    border-bottom: 2px solid white;
    margin-bottom: 5px;
    background-color: #1A1B1A;

}
.hd:hover{
    background: linear-gradient(to bottom, #ff66cc 0%, #00ffcc 100%);
    transition: 0.9s;

}
#main-content{
    min-height: 500px;
    
}
#main-content table{
    width: 70%;
    background-color: #555;
    margin: 0 0 20px;
    margin: auto;
    border: 2px solid white;
}
#main-content table th{
    color: #fff;
    background-color: #333;
    text-transform: uppercase;
    text-align: center;
    border: 1px solid #888B88;
}
#main-content table th:last-child{
    width: 150px;
    text-align: center;
}
#main-content table td{
    background-color: #DAE5D8;
    border: 1px solid #A7A9A7;
}

#main-content table td a{
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
    padding: 3px 7px;
    color: #fff;
    background-color: #e67e22;
    text-decoration: none;
    border-radius: 3px;
}
#main-content table td a:nth-child(2){
    background-color: #e74c3c;
    margin: 0 0 0 5px;
}
#footer{
    background-color: #555;
    height: 50px;
    margin-top: 215px;
}


</style>

<body>
    <div class="hd">
        <p class="head" style="">Welcome to admin managment system</p>
    </div>
	<div id="main-content">
        <div class="container-fluid">

             <div class="row">
                <div class="col-12" style="border-bottom:1px solid white;">
                    <p class="pb-0 mb-0" style="color:
#BDBFBD
;"><marquee><b>Hi.. Welcome :</b> <?php echo ucwords($_SESSION["name"]); ?></marquee></p>
                </div>
                
            </div>

            <div class="row">
                <div class="col-10">
                    <h2 class="text-center" style="margin-left:230px"><u>All Records</u></h2>
                </div>
                <div class="col-2"> <?php if('superadmin@gmail.com'==$_SESSION["username"]){ ?><a href="showpass.php" style="color:#dcece826;">Show Password</a> || <?php }?><a href="logout.php" style="color:#dcece826;">Logout</a></div>
                
            </div>

    <?php
    	include "config.php";
        
        $sql = "SELECT * FROM user";
        $result = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

        $sql1 = "SELECT * FROM s_admin";
        $result1 = mysqli_query($conn,$sql1) or die("Query Unsuccessful.");

        if (mysqli_num_rows($result)>0 || mysqli_num_rows($result1)>0 ) {
        

        
    ?>
    <table align="center" cellpadding="7px">
        <thead>
        <th>S.No.</th>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Date of Birth</th>
        <th>Action</th>
        </thead>
        <tbody>

            <?php 
            $sn=1;
            $gd="";
            $row1 = mysqli_fetch_assoc($result1);

            $s_admin = $row1['email'];
           
            while($row = mysqli_fetch_assoc($result)){

                if ($row['gender']==1) {
                    $gd='Male';
                } else{
                    $gd='Female';
                }

                $source =$row['dob'];
                $date = new DateTime($source);
                $admin= $row['email'];
            ?>
            <tr>
                <td><?php echo $sn++;?></td>
                <td><?php echo ucfirst($row['fname']);?> <?php echo ucfirst($row['lname']);?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $gd;?></td>
                <td><?php echo $date->format('d-F-Y-D');?></td>

                <!-- Super Admin -->
                <?php 
                    if($s_admin==$_SESSION["username"]){

               ?>

                 <td>
                     <a href='edit.php?id=<?php echo $row['id'];?>'>Edit</a>
                     <a href='deletedata.php?id=<?php echo $row['id'];?>'>Delete</a>
                 </td>

                <?php } else if($admin==$_SESSION["username"]){ ?> 

                 <td>
                    <a class="bg-success" href='admin_change_pass.php?id=<?php echo $row['id'];?>'> Change Pass</a>
                </td>
                   <?php } else {?>
                    <td>
                   <p class="p-0 m-0 text-danger">No Available</p> 
                </td>
                   <?php }?>

                
                <!--Close Super Admin -->
                
            </tr>
            <?php }?>
        </tbody>
    </table>
     

<?php } else{
    echo "<h2> No Record Found</h2>";
    }
    mysqli_close($conn);
?>
</div class="container-fluid">
<div>
<div id="footer"><p style="text-align: center; padding-top:12px; color: white;">@copyright 2022. All Rights Reserved.</p></div>
</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> <!-- For Sweet Alert -->



<?php 

if($_SESSION['status'] =="Record Update Successful."){
?>
        <script>
        swal({
          title: "<?php echo $_SESSION['status'];?>",
          icon: "<?php echo $_SESSION['status_code'];?>",
          button: "Ok Done!",
        });
        </script>
<?php
}

elseif($_SESSION['status'] == ""){
}

elseif($_SESSION['status']=="Record Deleted Successful."){?>
    <script>
        swal({
          title: "<?php echo $_SESSION['status'];?>",
          icon: "<?php echo $_SESSION['status_code'];?>",
          button: "Ok Done!",
        });
        </script>
<?php } else{
    ?>
        <script>
        swal({
          title: "<?php echo $_SESSION['status'];?>",
          icon: "<?php echo $_SESSION['status_code'];?>",
          button: "Ok Done!",
        });
        </script>

<?php
 session_unset();
}
?>

</body>
</html>