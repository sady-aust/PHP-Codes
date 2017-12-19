<?php


function hit_count(){
    $fileName = "count.txt";
    $handle = fopen($fileName,"r");
    $count = fread($handle,filesize($fileName));
    fclose($handle);
    $count_inc = $count+1;
    $handle = fopen($fileName,"w");
    fwrite($handle,$count_inc);
    fclose($handle);

}
?>