<?php


class Demo
{

    function getResult(){
        if(isset($_POST['btn'])){
            $firstNumber = $_POST['firstNumber'];
            $secondNumber = $_POST['secondNumber'];

            $check = $_POST['check'];

            $res = '';

            if($check=='odd'){
               if($firstNumber<$secondNumber){
                   for($i=$firstNumber;$i<=$secondNumber;$i++){
                      if($i%2!=0){
                          $res .=$i." ";
                      }
                   }
               }
               else{
                   for($i=$secondNumber;$i<=$firstNumber;$i++){
                       if($i%2!=0){
                           $res .=$i." ";
                       }
                   }
               }
            }
            else if($check == 'even'){
                if($firstNumber<$secondNumber){
                    for($i=$firstNumber;$i<=$secondNumber;$i++){
                        if($i%2==0){
                            $res .=$i." ";
                        }
                    }
                }
                else{
                    for($i=$secondNumber;$i<=$firstNumber;$i++){
                        if($i%2==0){
                            $res .=$i." ";
                        }
                    }
                }

            }
            return $res;
        }



    }
}