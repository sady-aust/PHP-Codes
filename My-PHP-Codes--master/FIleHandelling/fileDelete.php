<?php
$file_Name ="deletedFile.txt";

if(@unlink($file_Name)){
    echo "File <strong>".$file_Name."</strong> is deleted";
}
else{
    echo "File Can't be deleted";
}
?>