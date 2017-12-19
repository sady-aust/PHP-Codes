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
            padding: 5px;

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
<!--php codes here-->

    <?php
        class Person{
            public $name="Md. Toufiqul Islam";
            public $age ;



        }

        $ob1 = new Person();
        echo $ob1->name;
    ?>

</div>

    <div class="footer">
        <h3></h3>
    </div>
</div>
</body>
</html>