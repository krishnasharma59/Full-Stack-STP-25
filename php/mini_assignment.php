  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mini project</title>
  </head>
<body bgcolor="<?php
    if(isset($_POST['b1'])){
        $name= $_POST['t1'];
        echo $name;
    } ?>">
    <form method="post">
        <label for="">Enter color</label> <input type="text" name="t1" value="<?php
    if(isset($_POST['b1'])){
        $name= $_POST['t1'];
        echo $name;
    } ?>"/>
        <button type="submit" name="b1" value="submit">Submit</button>
    </form>



    
    <form method="post">
    <input type="text" name="txt1" value="<?php
    if(isset($_POST['b2'])){
        $secName=$_POST['txt2'];
        echo $secName;
    } ?>"/>
    <input type="text" name="txt2" value="<?php
    if(isset($_POST['b2'])){
        $name= $_POST['txt1'];
        echo $name;
    } ?>"/>
    <button type="submit" name="b2" value="submit">Submit</button>
    </form>
</body>
  </html>  
