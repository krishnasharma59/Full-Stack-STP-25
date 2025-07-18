<?php
    $msg ="";
    if(isset($_POST['adduser'])){
        $name= $_POST['txtname'];
        $pwd= $_POST['txtpwd'];
        $email= $_POST['txtemail'];
        $no = $_POST['phntxt'];
        $user= $_POST['user_type'];

        $con = mysqli_connect("localhost","root","","florifydb");
        $qry = "insert into users(name,email_id,password,phoneno,role) values('$name','$email','$pwd',$no,'$user')";
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
    <?php include_once("header.php"); ?>

        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8" >
                <h1 style="text-align:center">Add new user</h1>
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
                        <div class="form-group">
                            <label for=""> User Type</label>
                            <select class="form-control" name="user_type">
                                <option></option>
                                <option>Admin</option>
                                <option>Client</option>
                            </select>
                        </div>
                        <div style="text-align:center;">
                            <?php echo $msg."<br>"; ?>
                        <input  type="submit" value="Add" name="adduser" class="btn-default loginbtn">
                        </div>
                </form>
            </div>
            <div class="col-sm-2"></div>
            </div>
        </div>
    </div>
</div>
</body>