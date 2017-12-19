<?php
$arr = array(1,6,3,7,2,4,5);

function printArray($ar){
    for($i=0;$i<count($ar);$i++){
        echo $ar[$i]." ";
    }
}

echo "Unsorted array<br>";
printArray($arr);
sort($arr);

echo "<br>Print array in sorted Ascending";
printArray($arr);

//Decending Order
rsort($arr);
echo "<br>Print array in sorted Descending";
printArray($arr);

function printKeyValue($arr){

    foreach ($arr as $key=>$vale){
        echo "<br>".$key." ".$vale;
    }
}

//sorting associative array in ascending order according to value
$b = array("Sady"=>"20","Abrar"=>"25","Taran"=>"24");
asort($b);
printKeyValue($b);

//sorting associative array in ascending order according to key
ksort($b);
echo "<br>";
printKeyValue($b);

//sorting associative array in descending order according to value
arsort($b);
echo "<br>";
printKeyValue($b);

//sorting associative array in desending order according to key
krsort($b);
echo "<br>";
printKeyValue($b);


?>