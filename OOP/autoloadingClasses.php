<?php

/*  for AutoLoading classes we cal use
    autoload($class_name) function or
    spl_autoload_register(function ($className)
 */

/*include "classes/Java.php";
include "classes/Ruby.php";
include "classes/Php.php";*/

/*function __autoload($className){
    include "classes/".$className.".php";
}*/

spl_autoload_register(function ($className){
    include "classes/".$className.".php";
});
$ruby = new Ruby();
$java = new Java();
$php = new Php();

?>