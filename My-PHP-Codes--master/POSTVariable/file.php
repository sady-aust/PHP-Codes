<?php

$key = "pass123";
if(isset($_POST["password"])){
    $password = $_POST["password"];

    if(empty($password)){
        echo "Please insert the password";
    }
    else{
        if($password==$key){
            echo "Password matched";
        }
        else{
            echo "Sorry ! password doesn,t match";
        }
    }
}

?>
<form action="file.php" method="post">

    Password<br/>
    <input type="password" name="password"><br/><br/>
    <input type="submit">
</form>
