<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>This is heading text</h1>
    <?php
        echo("This is my 1st PHP page!!!");
    ?>
    <p>This text is generated unsing paragraph Tag</p>
    <h2>THis is heading text</h2>
    <?php
        echo("This is my 1st PHP page(echo)!!!<br>");
        print("This is my 1st PHP page(print)!!!");
    ?>
    <?php 
    /*Write a PHP script to display your name on webpagein double quotes
        Example: My name is "Krishna Sharma"
        */

        echo "<br>my name is \"Krishna Sharma\"";
    ?>
    <h1>Type of variable</h1>
    <?php
    $name= "Andy Smith";
    $age= 45;
    echo "<br>";
    echo(gettype($name));
    echo "<br>";
    echo(gettype($age));
    $age= 89.3;
    echo"<br>";
    echo(gettype($age));
    $x= true;
    echo"<br>";
    echo(gettype($x));
    $null= NULL;
    echo"<br>";
    echo(gettype($null));
    ?>
    <h1>Type of Constants</h1>
    <?php

        define("pi",3.141);
        echo"<br>";
        echo(pi);
        const version= "PHP-8";
        echo"<br>";
        echo version;
        echo "<br>";
        echo M_PI;
        echo "<br>";
        echo PHP_VERSION;
    ?>
    <h1>Operators</h1>
    <?php
        echo "<br>";
        echo 5/2;
        echo "<br>";
        //relational operators
        $x=45;
        $y="45";
        
        echo $x==$y;
        echo "<br>";

        echo $x===$y;   //identical operators
        echo "<br>";

        echo $x!=$y;
        echo "<br>";

        echo $x!==$y;   //identical operators
        echo "<br>";
        $age=45;
        echo "My age is ".$age; //concatination operators
        echo "<br>";
      
        $x = 5; 
        echo $x++;
        echo "<br>";
        
        echo ++$x;
        echo "<br>";


    ?>
    <form method="post">
        <label for="">Enter Name</label> <input type="text" name="t1" value=""/>
        <input type="submit" name="b1" value="Submit">
        <?php
            if(isset($_POST['b1'])){
                $name= $_POST['t1'];
                echo "<br>";
                echo $name;
            }
        ?>
    </form>
</body>
</html>