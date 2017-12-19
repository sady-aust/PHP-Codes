<?php
include "A.php";
include "B.php";
include "methods.php";

use methodA as mA;

//Creating object of a Class ( defined inside a namespcae)
new sady\A();
new sady\live\B();

//Calling methods of a namespace
sady\live\output();
mA\output();
methodB\output();

//For calling a defined variable which is Defined inside a namespace we need not to use namespace Name
echo PI."<br/>";

echo sady\CSS;
?>