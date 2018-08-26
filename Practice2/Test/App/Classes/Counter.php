<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 8/26/2018
 * Time: 10:52 PM
 */
namespace App\Classes;

class Counter
{

    function getResult($data){
       $numberofCharacter = strlen($data['myString']);
       $numberOfWOrd = str_word_count($data['myString']);

       $ans = ['numberOfCharacter'=>$numberofCharacter,'numberOfWord'=>$numberOfWOrd];


       return $ans;
    }
}