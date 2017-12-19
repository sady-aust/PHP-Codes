<?php

/*  for AutoLoading classes we cal use
    autoload($class_name) function or
    spl_autoload_register(function ($className)
 */

/*include "classes/Ap";
include "classes/Bp";
include "classes/Php.php";*/

/*function __autoload($className){
    include "classes/".$className.".php";
}*/

spl_autoload_register(function ($className){
    include "classes/".$className.".php";
});
$ruby = new B();
$java = new A();
$php = new Php();

?>