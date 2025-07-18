<?php
 session_start();
    if(!isset($_SESSION['uid'])){
        header("location: log_reg.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart-Florify</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
    <script src="bootstrap\js\jquery.min.js"></script>
    <script src="bootstrap\js\bootstrap.min.js"></script>
    <link rel="stylesheet" href="css\stylesheet1.css">

</head>
<body style="margin-bottom: 0%;padding-bottom: 0%; background-color: #fff7f1">
                <?php
                    include_once("header.php");
                ?>

    <div class="container-fluid">
                <div class="row">

            <div class="col-sm-5 banner_alignment" style="background-color: #fff7f1;">
                <img src="images\empty_cart.svg" alt="">
            </div>
            <div class="col-sm-7 banner_alignment">
                <h1>Hmm.....<br> Your Cart looks empty <br> Let's bloom it!!!!!</h1>
                <br>
                <br>
                <form action="index.php" method="post"><input type="submit" value="Home" name="loginBtn" class="btn-default loginbtn"></form>
                 
            </div>
        </div>
    </div>
</body>
<footer class= "footer_backgorund">
    <?php
    include_once("footer.php");
    ?>
</footer>
</html>