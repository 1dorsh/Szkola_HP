<?php
    session_start();

    echo 'Welcome to page #1';

    $_SESSION['imie'] = 'Hubert';
    $_SESSION['nazwisko'] = 'Pena';
    $_SESSION['time'] = time();

    echo '<br/><a href="session2.php">Page 2</a>';
?>