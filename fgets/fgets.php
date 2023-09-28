<?php
    $myFile = fopen("webdictionary.txt", "r")
                or die("nable to open file!");
    echo fgets($myFile);
    fclose($myFile);
?>