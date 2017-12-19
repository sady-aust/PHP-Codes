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
        class student{
            public $name;
            public $id;

            const DEPERTMENT = "CSE";

            public function __construct($name,$id)
            {
                $this->name = $name;
                $this->id = $id;
               // echo "Construtor called";
            }

            public function setName($name){
                $this->name = $name;
            }

            public function setID($id){
                $this->id = $id;
            }

            public function getID(){
                return $this->id;
            }

            public function getName(){
                return $this->name;
            }

            public function getConstant(){
                echo "The Depertment is ".student::DEPERTMENT;
            }
        }

        $ob1 = new student("Sady",97);
         echo $ob1->getConstant();

        ?>
    </div>

    <div class="footer">
        <h3></h3>
    </div>
</div>
</body>
</html>