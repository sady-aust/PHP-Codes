<?php

$file_dirrectory = "files";

if($handle = opendir($file_dirrectory)){

    while ($file = readdir($handle)){

        if($file!="." && $file!="..") {
            echo "<a href='".$file_dirrectory."/".$file."'>".$file."</a>"."<br/>";
        }
    }
}


?>