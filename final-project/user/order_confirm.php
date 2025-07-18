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
    <title>Order Confirmation-Florify</title>
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
        <div style="text-align:center">
            <h1>Thank you, [Customer Name]! 🌸</h1>
            <h3>
                Your order #12345 has been confirmed.
                <br>We're handpicking your blooms and getting them ready to ship.
                <br>🌼 Estimated delivery: [Date]
                <br>You'll receive a tracking link soon.
                <br>If you have any questions, we’re just a petal away!
                <br>
                <br>
                <br>
                <br>
                <br>
            </h3>
            <h5> 
                Looking for something more? 🌷
                <br>Explore our full collection — there’s always something blooming just for you! 
                <a style="text-decoration: none;" href="index.php">click this link to find out the pettals you want</a>
            </h5>
        </div>
    </div>