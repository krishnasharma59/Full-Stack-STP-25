<?php
 session_start();
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
        <div class="row">
            <div class="col-sm-12 banner_alignment" style="background-color: #fff7f1">
                <img src="images\birthday_banner.avif" alt="">
            </div>

        </div>
        <?php
            $con= mysqli_connect("localhost","root","","florifydb");
            $qry= "select * from products where product_type='Birthday'";
            $result = mysqli_query($con, $qry);
            $cnt = 0;
            $destinationPath ="/STP25/final_project/";
            while($row = mysqli_fetch_array($result)){
                if($cnt == 0){
                    echo "<div class='row'>";
                }
                echo "<a id='product' href='destination.php?pid=$row[0]'>";
                echo "<div class='col-sm-3 product_text'>";
                echo "<div>";
                echo "<div class='row'><div class='col-sm-12'><img id='product' src='$row[4]'/></div></div> ";
                echo "<div class='row'><div class='col-sm-12'>$row[1]</div></div>";
                echo "<div class='row'><div class='col-sm-12'> &#8377; $row[2]</div></div>";
                echo "</div>";
                echo "</div>";
                echo "</a>";
                $cnt++;

                if($cnt ==4){
                    echo "</div>";
                    $cnt = 0;
                }
            }
            mysqli_close($con);
        ?>
</div>
</body>
<footer class= "footer_backgorund">
    <?php
    include_once("footer.php");
    ?>
</footer>
</html>