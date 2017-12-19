<?php
$a = "Bangladesh is a beautiful country . &";
/*$numberOFWords = str_word_count($a,1,'.&');
print_r($numberOFWords);*/

//For shuffle a String
$suffleString = str_shuffle($a);
echo $suffleString;
echo "<br>";
//SUbstring
$subString = substr($suffleString,0,strlen($a)/2);
echo $subString;

//string reverse
$revString = strrev($a);
echo "<br>".$revString;

//Similarity of two String
$b = "My name is Sady";
$c = "My name is Sourav";
similar_text($b,$c,$text1);
echo "<br>".$text1;

//finding length of a String
$length = strlen($suffleString);
echo "<br>".$length;

//Trim a string
$e = " HELLO WORLD ";
$f = trim($e);
echo "<br>".$f;
 ?>
