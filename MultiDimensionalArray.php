<?php
/*$arr = array("Sady"=>array(0,1,2,3),"Sourav"=>array(4,5,6,7));
echo $arr["Sady"][2];
echo "<br>".$arr["Sourav"][2];*/
$arr = array(0=>array(1,2,3),1=>array(4,5,6));

for($i=0;$i<count($arr);$i++){
  for($j=0;$j<count($arr[$i]);$j++){
      echo $arr[$i][$j]."<br>";
  }
  echo "<br>";
}

echo "<strong>Printing 2d array using foreach loop</strong><br>";
//foreach Loop
foreach ($arr as $element=>$inner_array){
//echo $element."<br>";
foreach ($inner_array as $item){
    echo $item."<br>";
}
echo "<br>";
}
?>
