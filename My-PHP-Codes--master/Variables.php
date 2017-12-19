<?php
/*$a ="Hello";
$b = " World";

function myFunction(){
    global $a, $b;

    $b = $a.$b;
}
myFunction();
echo $b;*/
/*$a =5;
$b = 10;

function sum(){
    $GLOBALS['b'] = $GLOBALS['a'] +$GLOBALS['b'];
}

sum();
echo $b;*/

/*PHP THE Static KeyWord*/

function myFunc(){
    static $x=0;
    echo $x." ";
    $x++;
}

myFunc();
myFunc();
myFunc();
?>