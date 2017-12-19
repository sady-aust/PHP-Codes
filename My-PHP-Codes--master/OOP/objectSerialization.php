<?php
/*
 * serialization generates a storable representation of a value / object;
 * */

class Programming{
    public $java;
    public $c;
    public $css;
    public $html;

    public function __construct()
    {
       /* $this->java ="I am a A Programmer";
        $this->c ="I am a C Programmer";
        $this->css = "I Love CSS";
        $this->html = "I also Love JAVA";*/

    }


}

$pro = new Programming();

//By Serialize($pro) we serialize $pro object
/*$ser = serialize($pro);
file_put_contents("programming.txt",$ser);

$getContents = file_get_contents("programming.txt");

$unseri = unserialize($getContents);
echo "<pre>";
print_r($unseri);

echo "</pre>";*/


$pro->c = "I LOve C";
$pro->java = "I LOve A";
$pro->css = "I LOve CSS";
$pro->html = "I LOve HTML";


//Here actually serialize generates a storeable reprentation of $pro Object
 $ser = serialize($pro);


 $unseri = unserialize($ser);

 echo "<pre>";
 print_r( $unseri);
 echo "</pre>";

?>