<?php
/*
 * Magic MethodS
  -------------------
    get($property); //When we call a undefined property of a class then get() method will autometically called;
    set($property,$value); //When we assign a $value to a undefined $property of a class then set method will autometically called
    call($method,$array_arg); //when we call a undefined $method of a class then call method wil autometically called ,Here $array_arg is the argument of that method
 * */

class Student{
    public $name;

    public function details(){
        echo "Details method is called";
    }


    public function __get($name)
    {
        // TODO: Implement __get() method.
        echo $name." does not exists<br/>";
    }

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        echo "we set $name->$value in set method<br/>";
    }

    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        echo "There is no <strong>". $name ." method and arguments: ".implode(",",$arguments);
    }
}

$st = new Student();
$st->Id;//Here get() method will be call ..couse Id property doesnot exists in the Student class

$st->age=25;

$st->doesNotExists(5,3,7);
?>