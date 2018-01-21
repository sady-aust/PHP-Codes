<?php
echo "Today is ".date("D/M/Y")."</br>";
echo "Today is ".date("D.M.Y")."</br>";
echo "Today is ".date("l")."</br>";
echo "Time is ".date("h:i:sa")."</br>";

$d = strtotime("10:30pm April 13 2018");
echo "Created date is ".date("Y-M-D h:i:sa",$d)."</br>";

$t = strtotime("next saturday");
echo date("Y-m-d h:i:sa",$t);
?>