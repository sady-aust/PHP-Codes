<?php
include "calculation.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP OOP</title>
    <style>
        .header{
            text-align: center;
            background-color: darkturquoise;
            height: 50px;
        }
        .headerTitle{

            color: azure;
            font-size: 20px;
        }
        .phpCodes{
            border: 1px solid #40dad0;
            min-height: 400px;
            margin-top: 20pt;
            padding:10px;

        }
        .full{
            width: 900px;
            margin: 0 auto;
        }
        .footer
        {
            background:#40dad0;
            color:#fff;
            text-align:center;
            padding:20px;
            margin-top: 5px;
        }

    </style>
</head>
<body>
<div class="full">
    <div class="header">
        <div class ="headerTitle">
            <h3>My PHP Codes</h3>
        </div>
    </div>

    <div class="phpCodes">
       <form action="ExampleTwo.php" method="post">
           First Number :<input type="text" name="number1"><br/><br/>
           Second Number :<input type="text" name="number2"><br/><br/>
           <input type="submit" name="submit">
       </form>

        <?php
        if(isset($_POST["number1"]) && isset($_POST["number2"]) && isset($_POST["submit"])){

            $a = $_POST["number1"];
            $b = $_POST["number2"];

            if(empty($a) && empty($b)){
                echo "please fill the form correctly";
            }
            else{

                $calculate = new calculation();

                $addition = $calculate->add($a,$b);
                $sub = $calculate->sub($a,$b);
                $mul = $calculate->multiplication($a,$b);
                $div = $calculate->devide($a,$b);
                echo "The sum of ".$a." and ".$b." is ".$addition."<br/>";
                echo "The Sub of ".$a." and ".$b." is ".$sub."<br/>";
                echo "The Multiplication of ".$a." and ".$b." is ".$mul."<br/>";
                echo "The Division of ".$a." and ".$b." is ".$div."<br/>";

            }
        }

        ?>
    </div>

    <div class="footer">
        <h3></h3>
    </div>
</div>
</body>
</html>

