<?php
$file_name ="renameFile.txt";
$new_name = rand(10000,99999);

if(rename($file_name,$new_name.".txt")){
    echo "FIle renamed from <strong>".$file_name."</strong>"." to <strong>".$new_name."/.txt"."</strong>";
}
else{
    echo "Error occured";
}
?>