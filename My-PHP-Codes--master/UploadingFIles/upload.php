<?php
$f_name = $_FILES["file"]["name"];
$f_size = $_FILES["file"]["size"];
$f_type = $_FILES["file"]["type"];

$temp_Storage_name = $_FILES["file"]["tmp_name"];

$extension = strtolower(substr($f_name,strpos($f_name,".")+1));

if(isset($f_name)){
    if(!empty($f_name)){

            if(($extension=="jpg" || $extension=="jpeg") && $f_type=="image/jpeg") {
            $directory = "uploads/";

            if (move_uploaded_file($temp_Storage_name, $directory . $f_name)) {
                echo "Uploaded";
            }
        }
        else{
                echo "file must be in jpg/jpeg";
        }
    }
    else{
        echo "Please upload a file";
    }
}

?>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file"><br/><br/>
    <input type="submit">

</form>
