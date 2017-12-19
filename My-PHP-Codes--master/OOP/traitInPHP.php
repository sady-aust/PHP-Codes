<?php
trait Java{
    function descrive(){
        echo "I am a A Coder<br/>";
    }
}

trait PHP{
    function descrivePHP(){
        echo "I am a PHP Coder<br/>";
    }
}

class CoderOne{
    use A,PHP;

    //If we use this function in this class Php will priority this function
    /*function descrive()
    {
        echo "I am a java coder in CoderOne class";
    }*/
}

$cd = new CoderOne();
$cd->descrive();
$cd->descrivePHP();
?>