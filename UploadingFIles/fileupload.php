<?php
   $f_name = $_FILES["image"]["name"];
   $f_size = $_FILES["image"]["size"];
   $f_type = $_FILES["image"]["type"];
  $temp_storage_name = $_FILES["image"]["tmp_name"];

 $extension = strtolower(substr($f_name, strpos($f_name, ".")+1));
 if(isset($f_name)){
 	if(!empty($f_name)){
 		if(($extension=="jpg" || $extension=="jpeg") && $f_type=="image/jpeg"){
 			$directory = "uploads/";
 			if(move_uploaded_file($temp_storage_name, $directory.$f_name)){
 				echo "Uploaded";
 			}
 			else{
 				echo "Not Uploaded";
 			}
 		}
 	}
 	else{
 		echo "Please Upload a File";
 	}
 }
?>
<html>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
      </form>
      
   </body>
</html>