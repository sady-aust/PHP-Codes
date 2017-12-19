<?php

include "Human.php";

if(class_exists("Human")){
    $sady = new Human();
    $sady->Describe();
}

else{
    echo "Human Class Does Not Exits";
}
$sady = new Human();

if(method_exists($sady,"describe")){
    echo "<br/>Method Exists";
}
else{
    echo "<br/>Method Doesn't Exists";
}
?>