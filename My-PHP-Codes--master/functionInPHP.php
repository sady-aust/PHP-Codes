<title>Function</title>
<?php

function myFunc($text,$text1){
    echo $text." born in ".$text1;
}

myFunc("sady","1996");
echo "<br>";
myFunc("A","2000");

function setHeight($minHeight =50){

    echo "<br>Height is ".$minHeight;
}

setHeight(100);
setHeight();

//funtion with returning values

function sum($a,$b){
    return $a+$b;
}

echo "<br>SUM of 5 & 6 is ".sum(5,6);

$z= 5;
$y =10;

function myFun(){

}

?>