<?php
//Reading a file

$fileName = "names2.txt";

$handle = fopen($fileName,"r");

$dataIn = fread($handle,filesize($fileName));

//Spilt the data in dex with respect to ","
$dataIn_array = explode(",",$dataIn);

//echo $dataIn;

foreach ($dataIn_array as $item){
    echo $item."<br/>";
}


?>


