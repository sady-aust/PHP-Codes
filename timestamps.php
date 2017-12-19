<?php

$time= time();

//echo date("H: i :s",$time)."<br>";
echo "Date ".date("D M Y @ H:i:s",$time)."<br>";
//echo "Date ".date("d m y",$time);

echo "<br/><br/><strong>Modifying Timestamps</strong><br/>";

$current_Time = date("d M Y @ H:i:s",$time);
$Modified_Time =date("d M Y @ H:i:s",strtotime('- 1 week')); //1 week back Time
$Modified_Time1 =date("d M Y @ H:i:s",strtotime('- 1 week')); //1 week forward Time
$Modified_Year  =date("d M Y @ H:i:s",strtotime('+ 1 year'));
$Modified_week_hour_second_year  =date("d M Y @ H:i:s",strtotime('+ 1 week 1 hour 30 seconds 1 year'));
echo "Current date ".$current_Time;
echo "<br/> Modified Time ".$Modified_Time;
echo "<br/>After Modifing year ".$Modified_Year;
echo "<br/>After Modifing week hour second year ".$Modified_week_hour_second_year;
?>