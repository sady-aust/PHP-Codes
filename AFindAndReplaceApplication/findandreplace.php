<?php


if(isset($_POST["user_input"]) && isset($_POST["searchFor"]) && isset($_POST["replacewith"])){
     $text = $_POST["user_input"];
     $serach = $_POST["searchFor"];
     $replaceWith = $_POST["replacewith"];
     $offset =0;
     $serach_len = strlen($serach);
     //The cat is a cat

     if(!empty($text) && !empty($serach) && !empty($replaceWith) ){

        /* while ($strPos = strpos($text,$serach,$offset)){

             $offset =$strPos+$serach_len;

             $text = substr_replace($text,$replaceWith,$strPos,$serach_len);

         }
         echo $text;*/
        echo $out = str_replace($serach,$replaceWith,$text);
     }
   else{
         echo "PLEASE Fill the form correctly";
   }

}



?>
<form action="findandreplace.php" method="post">
    <textarea name="user_input" rows="5" cols="25"></textarea><br/><br/>
    Search For :<br/>
    <input type="text" name="searchFor"><br/><br/>
    Replace With :<br/>
    <input type="text" name="replacewith"><br/><br/>
    <input type="Submit" value="Find and Replace">
</form>
