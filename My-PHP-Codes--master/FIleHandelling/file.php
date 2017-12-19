<?php
/*
//opening a file
$handel = fopen("names.txt","w");

//writing to a file
fwrite($handel,"sady"."\n");
fwrite($handel,"Sourav");

fclose($handel);
echo "Wriiten"
*/


if(isset($_POST["name"])){
    $name = $_POST["name"];

    if(!empty($name)){
        $handle = fopen("names.txt","a");
        fwrite($handle,$name."\n");
        fclose($handle);

        //Reading file line by line
        $currentNames = file("names.txt");

        $number_of_element = count($currentNames);
        $count =0;

        echo "Current names in the file are \n";

        foreach ($currentNames as $fname){
            echo trim($fname);
            if($count<$number_of_element-1){
                echo ", ";
            }
            $count++;
        }
    }
}

?>
<form action="file.php" method="post">

    Name<br/>
    <input type="text" name="name"><br/><br/>
    <input type="submit">
</form>
