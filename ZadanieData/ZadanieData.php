<?php
    $start_date = date( "d.m.Y");  
    echo "Data dzisiejsza: ". $start_date . "<br>";
    $date = strtotime($start_date);
    $date = strtotime("+14 day", $date);
    echo "Data za dwa tygodnie: " . date('d.m.Y', $date);
?>



