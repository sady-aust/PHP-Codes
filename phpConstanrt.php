<!DOCTYPE html>
<html>
<head>
    <title>PAGE</title>
</head>
<?php
// case-Insencetive = false

define("sady","HELLO WORLD",false);
echo sady;

//case-Insencetive = true;
define("A","HELLO WORLD",true);
echo "<br>";
echo a;
echo "<br>";

//constant are global
define("vari","HELLO WORLD",false);
function myFunc(){
    echo vari;
}

myFunc();

?>
</html>
