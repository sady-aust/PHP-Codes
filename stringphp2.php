<?php
if(isset($_GET["user_name"]) && !empty($_GET["user_name"])){
  $name = $_GET["user_name"];
  if($name=="sady"){
    echo "You are good";
  }
}
 ?>
<form class="" action="stringphp2.php" method="GET">
<input type="text" name="user_name" value=""><br/><br/>
<input type="submit" name="" value="Submit">
</form>
