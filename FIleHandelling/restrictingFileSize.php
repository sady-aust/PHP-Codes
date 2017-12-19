<?php
$file_size = $_FILES["fileName"]["size"];
$max_File_Siza = 80000;

if($file_size>$max_File_Siza){
    echo "File size is greater then 80000 bytes";
}
else{
    echo "Uploaded";
}
?>

<form action="restrictingFileSize.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fileName"><br/><br/>
    <input type="submit">
</form>
