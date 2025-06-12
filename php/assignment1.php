<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Translator</title>
    <table style="border-style:solid; width:100%;text-align: center;">
        <tr>
            <td>
                <h1>HTML TRANSLATOR</h1>
            </td>
        </tr>

    </table>
</head>
<body>
    <form action="" method="post">
    <table border="1" style="width:100%;text-align: center;">
        <tr>
            <td colspan="2">
                <form action="" method="post">
                    <button type="submit" name="btn1" value="submit"><h4>Submit</h4></button>
                </form>
            </td>
        </tr>
        <tr>
            <td style="width:50%;">
                <textarea name="txtcode1" id="a1" style="height: 500px;width:99%;"></textarea>
            </td>
            <td  style=" height:500px;width:50%;">
                <?php
                    if(isset($_POST['btn1'])){
                        $code= $_POST['txtcode1'];
                        echo $code;
                    }
                ?>
            </td>
            
        </tr>
    </table>
    </form>
</body>
</html>