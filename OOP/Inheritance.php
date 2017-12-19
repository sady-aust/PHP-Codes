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
         class  Employee{
            public $name;
            public $age;
            public $salary;

           public function __construct($name,$age,$salary){
                $this->name = $name;
                $this->age = $age;
                $this->salary = $salary;
            }


           public function display(){
                echo $this->name." ".$this->age." ".$this->salary;
            }
        }

        class Admin extends Employee{
            public $desig;

            public function __construct($name, $age, $salary,$desig)
            {
                parent::__construct($name, $age, $salary);
                $this->desig = $desig;
            }


            public function display()
            {
                echo $this->name." ".$this->age." ".$this->salary." ".$this->desig;
            }

        }

        $em1 = new Admin("Sady","22","25000","Admin");

         if($em1 instanceof Admin){
             echo "Inherited";
         }
       ?>
    </div>

    <div class="footer">
        <h3></h3>
    </div>
</div>
</body>
</html>