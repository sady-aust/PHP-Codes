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
            padding: 10px;
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
        <?php
        class UniversityStudent{
            public $id;
            public $name;

            public static $DEPERTMENT = "CSE";
            const CGPA = "3.00";

            public function __construct($id,$name){
                $this->id = $id;
                $this->name = $name;
            }


            public static function Display(){
                echo "Depertment Name is ".UniversityStudent::$DEPERTMENT." And CGPA is ".UniversityStudent::CGPA;
            }

        }

        $ob3 = new UniversityStudent("SAdy","97");

         UniversityStudent::Display();
       ?>
    </div>

    <div class="footer">
        <h3></h3>
    </div>
</div>
</body>
</html>