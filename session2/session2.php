<?php
    session_start();


    echo "Welcome to page #2<br>";


    echo "Mam na imie: ". $_SESSION['imie']."<br>";
    echo "Moje nazwisko to: ". $_SESSION['nazwisko']."<br>";
    echo date('Y m d H:i:s', $_SESSION['time']). "<br>";


    echo $_SESSION['bzdura'];
?>
