<?php
$string = "HELLO,WORLD";

if(preg_match('/,/',$string)){
  echo "Match Found";
}
else {
  
  echo "No match Found";
}
?>
