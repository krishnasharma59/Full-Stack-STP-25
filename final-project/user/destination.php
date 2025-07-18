<?php
 session_start();
?>
<?php
    $pid = $_GET['pid'];
    $con= mysqli_connect("localhost","root","","florifydb");
    $qry= "select * from products where product_id= $pid";
    $result = mysqli_query($con,$qry);
    $row = mysqli_fetch_array($result);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Birthday-Florify</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
    <script src="bootstrap\js\jquery.min.js"></script>
    <script src="bootstrap\js\bootstrap.min.js"></script>
    <link rel="stylesheet" href="css\stylesheet1.css">

</head>
<body style="margin-bottom: 0%;padding-bottom: 0%; background-color: #fff7f1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <?php
                    include_once("header.php");
                ?>
            </div>
        </div>
<!-- This is for gap between header-->
        <div class="row" style="height:119px">
            <div class="col-sm-12"></div>
        </div>

<!-- here work will start -->
        <div class="row box1">
            <div class="col-sm-6"><img style="height:500px" src="<?php echo "$row[4]";?>" alt="iamge"></div>
            <div class="col-sm-6">
                <div class="row"><div class="col-sm-12"><label><?php echo "$row[1]";?></label></div></div>
                <div class="row"><div class="col-sm-12"><label for="">Price: <?php echo "$row[2]";?></label></div></div>
                <div class="row"><div class="col-sm-12"><label><h1>Description</h1></label></div></div>
                <div class="row"><div class="col-sm-12"><label><h5><?php echo "$row[3]";?></h5></label></div></div>
                <div class="row"><div class="col-sm-12"><label><input type="button" class="btn btn-success" value="Submit"></label></div></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 footer_backgorund">
                <?php
                    include_once("footer.php");
                ?>
            </div>
        </div>
    </div>
</body>
</html>