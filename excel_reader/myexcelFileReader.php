<?php
require_once "Classes\PHPExcel\IOFactory.php";
if(isset($_FILES["excelfile"]) && !empty($_FILES["excelfile"]["tmp_name"])){
    $excelObject = PHPExcel_IOFactory::load($_FILES["excelfile"]["tmp_name"]);
    //$getSheet = $excelObject->getActiveSheet()->toArray(null);
    echo "<pre>";
    $total = $excelObject->getSheetCount();
    $excelObject->getSheet();
    //echo json_encode($getSheet);

   for($i=0;$i<$total;$i++){
       echo ($i+1)." Sheet </br>";
       $getSheet = $excelObject->getSheet($i)->toArray(null);
       for($x=0;$x<count($getSheet);$x++){
           for($y=0;$y<count($getSheet[$x]);$y++){
               echo $getSheet[$x][$y]."\t\t";
           }
           echo "</br>";
       }
   }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="excelfile">
		<input type="submit" name="Submit">

	</form>

</body>
</html>