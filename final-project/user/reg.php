<?php
    $msg ="";
    if(isset($_POST['loginBtn'])){
        $name= $_POST['txtname'];
        $pwd= $_POST['txtpwd'];
        $email= $_POST['txtemail'];
        $no = $_POST['phntxt'];

        $con = mysqli_connect("localhost","root","","florifydb");
        $qry = "insert into users(name,email_id,password,phoneno) values('$name','$email','$pwd',$no)";
        mysqli_query($con,$qry);
        $i=mysqli_affected_rows($con);
        if($i>0){
            $msg = "<font color ='green'>Registration Successfull</font>";
        }
        else{
            $msg= "<font color ='red'>Error in registration. Try again</font>";
        }
        mysqli_close($con);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration-Florify</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
    <script src="bootstrap\js\jquery.min.js"></script>
    <script src="bootstrap\js\bootstrap.min.js"></script>
    <link rel="stylesheet" href="css\stylesheet1.css">

</head>
<body style="background-color: #fff7f1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 banner_alignment" >
                <img src="images/logo.png" style="margin-top: 10px;" class="logo_img" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8" >
                <h1 style="text-align:center">Register</h1>
                <form class="form-group" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="txtname" class="form-control" value=""/>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="Password" name="txtpwd" class="form-control" value=""/>
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="Password" name="txtpwd1" class="form-control" value=""/>
                        </div>
                        <div class="form-group">
                            <label>Email-id</label>
                            <input type="email" name="txtemail" class="form-control" value=""/>
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="number" name="phntxt" class="form-control" value=""/>
                        </div>
                        <div style="text-align:center;">
                            <?php echo $msg; ?>
                        <input  type="submit" value="Register" name="loginBtn" class="btn-default loginbtn">
                        </div>
                </form>
                <div style="text-align:center;">
                    <h6>have a account? <a style="text-decoration: none;" href="log_reg.php">Login</a></h6>
                    <h6>Member Login <a style="text-decoration: none;" href="../admin/admin_log.php">login</a></h6>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
</body>