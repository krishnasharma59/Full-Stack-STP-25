
<?php
    $msg ="";
        if(isset($_POST['addproduct'])){
        //boolean move_uploaded_file($sourcePath,$destination_path)
        if($_FILES['myfile']['error']==0){
        $sourcePath = $_FILES['myfile']['tmp_name'];
        $destinationPath = $_SERVER['DOCUMENT_ROOT']."/STP25/final_project/product_img/".$_FILES['myfile']['name'];
        if(move_uploaded_file($sourcePath,$destinationPath))
            $msg2= "File Uploaded successfuly!!!";
        else
            $msg2= "Error in Uploading";
                                                
        }
        else{
            $msg2= "File is corrupted";
        }
    }

        if (isset($_POST['addproduct'])) {

            if ($_FILES['myfile']['error'] == 0) {
                $relativePath = "product_img/" . $_FILES['myfile']['name'];
            }
        }
    if(isset($_POST['addproduct'])){
        $Pname= $_POST['txtname'];
        $event_type= $_POST['event_type'];
        $price= $_POST['pricetxt'];
        $description= $_POST['txtdesc'];
        $path = $relativePath;

        $con = mysqli_connect("localhost","root","","florifydb");
        $qry = "insert into products(product_name,product_price,product_description,product_image,product_type) values('$Pname',$price,'$description','$path','$event_type')";
        mysqli_query($con,$qry);
        $i=mysqli_affected_rows($con);
        if($i>0){
            $msg = "<font color ='green'>Registration Successfull</font>";
        }
        else{
            $msg= "<font color ='red'>Error in registration. Try again</font>";
            echo mysqli_error($con);
        }
        mysqli_close($con);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products-Florify</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
    <script src="bootstrap\js\jquery.min.js"></script>
    <script src="bootstrap\js\bootstrap.min.js"></script>
    <link rel="stylesheet" href="css\stylesheet1.css">

</head>
<?php include_once("header.php"); ?>
<body style="background-color: #fff7f1">
    <div class="container-fluid">
        </div>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8" >
                <h1 style="text-align:center">Add new Products</h1>
                <form class="form-group" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" name="txtname" class="form-control" value=""/>
                        </div>

                        <div class="form-group">
                            <label for=""> Product Type</label>
                            <select class="form-control" name="event_type">
                                <option></option>
                                <option>Birthday</option>
                                <option>Anniversary</option>
                                <option>Events</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Product Price</label>
                            <input type="number" name="pricetxt" class="form-control" value=""/>
                        </div>
                        <div class="form-group">
                            <label>Product Description</label>
                            <textarea class="form-control" name="txtdesc" rows="6" cols="50"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="file" name="myfile" id="fileToUpload">
                        </div>
                        <div style="text-align:center;">
                            <?php echo $msg."<br>"; ?>
                        <input  type="submit" value="Add" name="addproduct" class="btn-default loginbtn">
                        </div>
                </form>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
</body>