<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Assignment</title>
</head>
<body>
    <form method="get">
    <h1 style="text-align: center;">Q1. Task-1</h1>
    <input type="number" name="txt1" value=""/>
    <button type="submit" name="btn1" value="">Submit</button>
    <?php
        if(isset($_GET['btn1'])){
            $n= $_GET['txt1'];
            $res= $n*$n*$n;
            echo "<br>result is: ".$res;
        }
    ?>
    </form>
    <form method="get">
    <h1 style="text-align: center;">Q1. Task-2</h1>
    <input type="number" name="txt2" value=""/>
    <button type="submit" name="btn2" value="">Submit</button>
    <?php
        if(isset($_GET['btn2'])){
            $n= $_GET['txt2'];
            $i=1;
            while($i<=10){
                $res= $n*$i;
                echo "<br>".$n." x ".$i."= ".$res;
                $i++;
            }
        }
    ?>
    </form>
    <form method="get">
    <h1 style="text-align: center;">Q1. Task-3</h1>
    <input type="number" name="txt3" value=""/>
    <button type="submit" name="btn3" value="">Submit</button>
    <?php
        if(isset($_GET['btn3'])){
            $n= $_GET['txt3'];
            $res=1;
            while($n>0){
                $res= $res*$n;
                $n= $n-1;
            }
            echo "<br> result is: ".$res;
        }
    ?>
    </form>
    <form method="get">
    <h1 style="text-align: center;">Q1. Task-4</h1>
    <input type="number" name="txt4" value=""/>
    <button type="submit" name="btn4" value="">Submit</button>
    <?php
        if(isset($_GET['btn4'])){
            $n= $_GET['txt4'];
            $isPrime="true";
            for($i=2;$i<$n;$i++){
                if($n%$i==0){
                    $isPrime="false";

                }
            }
            echo "<br> result is: ".$isPrime;
        }
    ?>
    </form>
    <form method="get">
    <h1 style="text-align: center;">Q2.</h1>
    <input type="number" name="txt5_1" value=""/>
    <input type="number" name="txt5_2" value=""/>
    <input type="number" name="txt5_3" value=""/>
    <input type="number" name="txt5_4" value=""/>
    <input type="number" name="txt5_5" value=""/>
    <button type="submit" name="btn5" value="">Submit</button>
    <?php
        if(isset($_GET['btn5'])){
            $m1= $_GET['txt5_1'];
            $m2= $_GET['txt5_2'];
            $m3= $_GET['txt5_3'];
            $m4= $_GET['txt5_4'];
            $m5= $_GET['txt5_5'];

            echo "<br> total Marks is: ".$m1+$m2+$m3+$m4+$m5;
            echo "<br> total percentage is: ".(($m1+$m2+$m3+$m4+$m5)/500)*100;
        }
    ?>
    </form>
    <form method="get">
    <h1 style="text-align: center;">Q3.</h1>
    <input type="number" name="txt6" value=""/>
    <button type="submit" name="btn6" value="">Submit</button>
    <?php
        if(isset($_GET['btn6'])){
            $n= $_GET['txt6'];
            $hra=0;
            $da=0;
            if($n<2000){
                $hra= $n*0.10;
                $da= $n*0.15;

            }
            elseif ($n>=2000 || $n<=5000) {
                $hra= $n*0.15;
                $da= $n*0.20;
            }
            else{
                $hra= $n*0.20;
                $da= $n*0.25;
            }
            echo "<br> the Gross Salary is: ".$n+$hra+$da;
        }
    ?>
    </form>
    <form method="get">
    <h1 style="text-align: center;">Q4.</h1>
    <input type="number" name="txt7" value=""/>
    <button type="submit" name="btn7" value="">Submit</button>
    <?php
        if(isset($_GET['btn7'])){
            $n= $_GET['txt7'];
            if($n>=90){
                echo "<br> Grade A+";

            }
            elseif ($n<90 && $n>=80) {
                echo "<br> Grade A";
            }
            elseif ($n<80 && $n>=70) {
                echo "<br> Grade B+";
            }
            elseif ($n<70 && $n>=60) {
                echo "<br> Grade B";
            }
            elseif ($n<60 && $n>=50) {
                echo "<br> Grade C";
            }
            else{
                echo "<br> FAIL";
            }
        }
    ?>
    </form>
</body>
</html>