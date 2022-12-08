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
    color: #EFF5EF;
    transition: 0.9s;
}
.hd{
    border-bottom: 2px solid white;
    margin-bottom: 5px;

}
.hd:hover{
    background-color: black;
     transition: 0.9s;

}
#main-content{
    min-height: 490px;
    
}
#main-content table{
    width: 60%;
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
}


</style>

<body>
    <div class="hd">
        <p class="head">Welcome to password managment system</p>
    </div>
	<div id="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-10">
                    <h2 class="text-center ml-5 pl-5"><u>All users password</u></h2>
                </div>
                <div class="col-2"> <a href="admin.php" style="color:#dcece826;">Go Admin Page</a></div>
            </div>
        </div>

    <?php
    	include "config.php";
        
        $sql = "SELECT * FROM user";
        $result = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

        if (mysqli_num_rows($result)>0) {
            
        
    ?>
    <table align="center" cellpadding="7px">
        <thead>
        <th>S.No.</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Password // MD5 Code</th>
        </thead>
        <tbody>

          <!--   $source = '2012-07-31';
            $date = new DateTime($source);
             echo $date->format('d.m.Y'); -->

            <?php 
            $sn=1;

            while($row = mysqli_fetch_assoc($result)){

                              
            ?>
            <tr>
                <td><?php echo $sn++;?></td>
                <td><?php echo $row['fname']?> <?php echo $row['lname']?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['password']?></td>
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
</body>
</html>