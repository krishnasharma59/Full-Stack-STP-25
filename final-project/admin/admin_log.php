<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Florify</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
    <script src="bootstrap\js\jquery.min.js"></script>
    <script src="bootstrap\js\bootstrap.min.js"></script>
    <link rel="stylesheet" href="css\stylesheet1.css">

</head>
<body style="background-color: #012117;color: #f7d2b6;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 banner_alignment" >
                <img src="images/logo.png" style="margin-top: 10px;" class="logo_img" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8" >
                <h1 style="text-align:center">Login</h1>
                <form class="form-horizontal" method="post">
                        <div class="form-group">
                            <div class="col-sm-4"><label class="control-label">Username</label></div>
                            <div class="col-sm-8"><input type="text" name="txtuname" class="form-control" value=""/></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4"><label class="control-label">Password</label></div>
                            <div class="col-sm-8"><input type="Password" name="txtpwd" class="form-control" value=""/></div>
                            
                            
                        </div>
                        <div> <h5><input type="checkbox" name="rememberme" id="rem1">Remember me</h5></div>
                        <div style="text-align:center;">
                        <input  type="submit" value="Login" name="loginBtn" class="btn-default loginbtn">
                        </div>
                </form>
                <div style="text-align:center;">
                    <h6>Not a member? <a style="text-decoration: none;" href="../user/log_reg.php">User Login</a></h6>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
</body>