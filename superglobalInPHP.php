<?php
$x =5;
$y =5;

//SUPER GLOBAL VARIABLE: GLOBALS
function myFunc(){
    $GLOBALS['z'] = $GLOBALS['x']+$GLOBALS['y'];
}
myFunc();
echo $z."<br>";

//PHP SERVER SUPERGLOBAL

echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['HTTP_HOST']."<br>";
echo $_SERVER['HTTP_REFERER']."<br>";
echo $_SERVER['HTTP_USER_AGENT']."<br>";
echo $_SERVER['SCRIPT_NAME']."<br>";
echo $_SERVER['SERVER_ADDR']."<br>";
echo $_SERVER['REQUEST_METHOD']."<br>";

?>