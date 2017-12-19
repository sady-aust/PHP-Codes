<?php
abstract class Student{
    public $name;
    public $age;
    public function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getDetails(){
        return "Student Name ".$this->name." age ".$this->age;
    }

    public abstract function getID();
}

class UniversityStudent extends Student {
    public $id;

    public function __construct($id,$name,$age)
    {
        parent::__construct($name,$age);
        $this->id = $id;
    }

    public function parentClassgetDetailsMethodCall(){
       return parent::getDetails()." id ".$this->id."<br/>";
    }

    public function getID()
    {
        // TODO: Implement getID() method.
        return $this->id;
    }
}

$ob = new UniversityStudent(5,"Sady","22");
echo $ob->parentClassgetDetailsMethodCall();
echo $ob->getID();
?>