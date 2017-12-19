<!DOCTYPE html>
<html>
<head></head>
<body>
<form action="welcome.php" method="get">
    Name :<input type="text" name="name"><br/><br/>
    Email Address:<input type="email" name="email"><br/>
    <input type="submit" value="Submit">
</form>

<?php
$name = $_GET["name"];
$email =$_GET["email"];

echo "Welcome ".$name."<br/>";
echo "Your Email Address ".$email

?>
</body>
</html>