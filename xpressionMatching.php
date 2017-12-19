<?php

function has_space($string){
  if(preg_match("/ /",$string)){
    return true;
  }
  else{
    return false;
  }
}

$a ="HelloWorld";
if(has_space($a)){
  echo "The string has at least one space";
}
else {
  echo "The String has no space";
}
 ?>
