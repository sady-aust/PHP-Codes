
<?php
if(isset($_POST["lang"])){
  $coder = $_POST["lang"];
  echo "You have Selected: ";
  foreach ($coder as $key=>$value){
      echo $value.",";
  }
}
?>

<form method="post" action="" >

    <input type="checkbox" name="lang[]" value="PHP">PHP
    <input type="checkbox" name="lang[]" value="JAVA">JAVA
    <input type="checkbox" name="lang[]" value="C#">C#<br/>
    <input type="submit" name="submit">

    <h4>Select Option</h4>
    Please Select a Language:
    <select name="select">
        <option>Select One</option>
        <option value="JAVA">JAVA</option>
        <option value="C#">C#</option>
        <option value="PHP">PHP</option>
        <option value="C++">C++</option>
    </select>

    <input type="submit" value="ok">

</form>

<?php

if (isset($_POST["select"])){
    $item = $_POST["select"];
    echo "You are ".$item." coder";
}

?>