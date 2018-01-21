<?php
$myfile = fopen("names.txt", "r") or die("File Could Not Open");

echo fread($myfile, filesize("names.txt"));
fclose($myfile);

//PHP Read Single Line - fgets()

$myfile = fopen("names.txt", "r") or die("File Could Not Open");
echo "</br>".fgets($myfile);
echo "</br>".fgets($myfile);
echo "</br>".fgets($myfile);

echo "</br>";
//PHP Check End-Of-File - feof()

while (!feof($myfile)) {
	echo "</br>".fgets($myfile);
}
fclose($myfile);
echo "</br>";
$myfile = fopen("names.txt", "r") or die("File Could Not Open");
//PHP Read Single Character - fgetc()
while (!feof($myfile)) {
	echo "</br>".fgetc($myfile);
}
 ?>