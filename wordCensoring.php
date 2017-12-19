<?php

$find = array("sady","taran","sourav");
$replace = array("s**y","t**an","s***av");

if(isset($_POST["user_input"]) && !empty($_POST["user_input"])){
    $s = $_POST["user_input"];
   // $s_lc = strtolower($s);
    $string_new = str_ireplace($find,$replace,$s);
    echo $string_new;
}

?>

<form action="wordCensoring.php" method="post">
   <textarea name="user_input" rows="5" cols ="15" ><?php echo $s?></textarea><br/><br/>
    <input type="submit" value="Submit">
</form>
