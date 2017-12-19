<?php
$fName = "file.txt";
$handle = fopen($fName,"w");
fwrite($handle,"5f4dcc3b5aa765d61d8327deb882cf99");
fclose($handle);

if (isset($_POST["password"]) && !empty($_POST["password"])){

    $handle = fopen($fName,"r");
    $pass = fread($handle,filesize($fName));

    $userPass = md5($_POST["password"]);

    if($userPass==$pass){
        echo "PassWord matched";
    }
    else{
        echo "Password didnot matched";
    }
}
?>

<form action="index.php" method="post">
    <input type="password" name="password"><br/><br/>
    <input type="submit">
</form>
