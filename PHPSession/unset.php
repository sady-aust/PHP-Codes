<?php
session_start();
//unset($_SESSION["name"]);//it will remove only the name variable value
session_destroy();//It will destroy all the value of current session
?>