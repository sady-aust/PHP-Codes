<?php
//PHP Create File - fopen()
$myfile = fopen("myfile.txt", "w") or die("File Could not open");
$txt = "Sady\n";
fwrite($myfile, $txt);
$txt = "Sourav\n";
fwrite($myfile, $txt);
fclose($myfile);


?>