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
        class Person{
            public $id;
            public $name;
            public $age;


            public function __construct($name,$age){
                $this->name = $name;
                $this->age = $age;
            }

            //Destructor is called when the object of that class will destroy.
            public function __destruct()
            {
               if(!empty($this->id)){
                   echo "Saving Person...";
               }
            }

            public function setId($id){
                $this->id = $id;
                echo "setId Is called.<br/>";
            }

            public function getPersionNameAndAge(){
                echo "Name of the person is " .$this->name. " and Age of the Persion is ".$this->age."<br/>";
            }
        }

        $personOb = new Person("Sady",22);

        $personOb->getPersionNameAndAge();

        $personOb->setId(12);
        unset($personOb);//In here we unset the $personOb object ..so here Destructor will call..

       ?>
    </div>

    <div class="footer">
        <h3></h3>
    </div>
</div>
</body>
</html>