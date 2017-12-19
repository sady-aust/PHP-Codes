<?php
$fName = $_FILES["picture"]["name"];
$temp_storage_Dir = $_FILES["picture"]["tmp_name"];

if(isset($fName)){
    if(!empty($fName)){
        $dir ="uploads/";
       if(move_uploaded_file($temp_storage_Dir,$dir.$fName)){
           echo "Uploaded";
       }
    }
    else{
        echo "Please Upload a file";
    }
}

?>
<form action="practice.php" method="post" enctype="multipart/form-data">
    <input type="file" name="picture"><br/><br/>
    <input type="submit">
</form>
