<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View User-Florify</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
    <script src="bootstrap\js\jquery.min.js"></script>
    <script src="bootstrap\js\bootstrap.min.js"></script>
    <link rel="stylesheet" href="css\stylesheet1.css">
</head>
<body style="background-color: #fff7f1">
    
    <?php
      include_once("header.php");  
    ?>
    <?php
        $con = mysqli_connect("localhost","root","","florifydb");
        $qry = "select * from users";
        $result = mysqli_query($con,$qry);
        echo "<table class= 'table table-bordered width_site'>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>$row[0]</td>";
            echo "<td>$row[1]</td>";
            echo "<td>$row[2]</td>";
            echo "<td>$row[3]</td>";
            echo "<td>$row[4]</td>";
            echo "<td>$row[5]</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
            
        </div>
    </div>
</div>
</body>
</html>