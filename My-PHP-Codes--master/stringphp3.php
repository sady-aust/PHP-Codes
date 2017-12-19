<?php

$string = "This is bangladesh";
$temp ="bangladesh";
$offset = 0;

$temp_length = strlen($temp);
/*
//finding the first position of is
echo strpos($string,$temp,3);*/

//strpos will return 0 if $temp is not found in $string
while ($strposition = strpos($string,$temp,$offset)){
    echo "<strong>$temp</strong>"." Found at ".$strposition."<br>";
    $offset = $strposition + $temp_length;


}

echo "<h1>substr-replace() function:</h1>";

$s = "Bangladesh is a Beautiful country";
$save = "Wonderful";
$rep_string = substr_replace($s,$save,16,9);
echo $rep_string."<br>";

echo "<h1>str-replace() function:</h1>";
/*$find = array("My","name","is");
$replaceWithFInd = array("MY","NAME","IS");
$s1 = "My name is Sady";
$new_sady = str_replace($find,$replaceWithFInd,$s1);
echo $new_sady."<br>";*/
$find = "sady";
$replace = "abrar";
$text = "sady sady sady is sady";
echo str_replace($find,$replace,$text);


?>