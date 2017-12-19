<?php
$file_name ="file.txt";

if(file_exists($file_name)){
    echo "File Already Exist";
}
else{
    $handle = fopen($file_name,"w");
    fwrite($handle,"Nothing");
    fclose($handle);
}
?>