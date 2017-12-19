<?php
/*$a = null;

if(isset($a)){
    echo "variable is set";
}
else{
    echo "Variable is not set";
}

if(empty($a)){
    echo "<br/>variable is empty";
}
else{
    echo "<br/>variable is not empty";
}*/

if(isset($_GET["day"]) && isset($_GET["time"]) && isset($_GET["year"])){

    $day = $_GET["day"];
    $time = $_GET["time"];
    $year = $_GET["year"];

    if(!empty($day) && !empty($time) && !empty($year)){
        echo "It is ".$day." ".$time." ".$year;

    }
    else{
        echo "Please Fill Up The form Correctly";
    }


}



?>

<form action="index.php" method="get">
Day: <input type="text" name="day"><br/><br/>
Date: <input type="text"name="time"><br/><br/>
Year: <input type="text" name="year"><br/><br/>
<input type="submit">
</form>
