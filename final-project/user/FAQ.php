<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Anniversary-Florify</title>
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
        <div class="row">
            <div class="col-sm-12 banner_alignment" style="background-color: #fff7f1">
                <h1>Still blooming with questions?</h1>
                <h5>Don’t worry — we’re here to help your doubts wilt away.</h5>
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