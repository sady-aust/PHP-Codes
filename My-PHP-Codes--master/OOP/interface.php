<?php
interface demo{
    public function mySchool($a);
    public function myCOllege($a);
    public function myUniversity($a);
}

class Teacher implements demo{


    public function mySchool($a)
    {
        // TODO: Implement mySchool() method.

        echo "I am a School Teacher ".$a."<br/>";
    }

    public function myCOllege($b)
    {
        // TODO: Implement myCOllege() method.
        echo "I am a School Teacher ".$b."<br/>";
    }

    public function myUniversity($c)
    {
        // TODO: Implement myUniversity() method."<br/>;
        echo "I am a School University ".$c."<br/>";
    }
}

$teacherOb = new Teacher();
$c = "SADY";
$teacherOb->mySchool($c);
$teacherOb->myCOllege($c);
$teacherOb->myUniversity($c);

?>