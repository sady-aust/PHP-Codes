<?php ob_start()?>
<h1>Hello World</h1>

<?php
$var = "http://www.google.co.in";
$redirect = true;
if($redirect==true){
header("Location: ".$var);
}

ob_end_flush();
?>