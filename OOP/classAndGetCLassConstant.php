<?php

class ClassA{

    public function myFunc(){
        echo "__CLASS__ returns ".__CLASS__."<br/>";
        echo "getClass() returns ".get_class($this);
    }
}

class ClassB extends ClassA{
    public function myFunc()
    {
        parent::myFunc();
    }

}

$ob = new ClassB();
$ob->myFunc();

?>