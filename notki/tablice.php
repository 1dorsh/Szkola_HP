<?php
    $cars = array (
        array("Volvo",22),
        array("BMW",15)
    );
    echo "<table>\n";
    echo "<tr><td>Car</td><td>In stock</td></tr>\n";
    echo "<tr><td>". $cars[0][0]."</td><td>". $cars[0][1]."</td></tr>\n";
    echo "<tr><td>". $cars[1][0]."</td><td>". $cars[1][1]."</td></tr>\n";
    echo "</table>";
?>

<?php
    $tanks = array("Leopard", "IS7", "E100");
    echo "Size of array TANKS = " . count($tanks);
?>

<?php
    $cars = array("Volvo", "BmW", "Toyota");


    sort($cars); // sort arrays in ascending order


    rsort($cars); // sort arrays in descending order
?>

<?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo "Tablica przed sortowaniem: <br> ";
    var_dump( $cars );


    sort( $cars );
    echo "<br><br>Tablica po sortowaniu: <br> ";
    var_dump( $cars );
   
    rsort( $cars );
    echo "<br><br>Tablica po sortowaniu odwrotnym: <br> ";
    var_dump( $cars );
?>

<?php
    $age = array("Peter"=>"35", "Ben"=>"37", "Gargulec"=>"43");


    asort($age); // sort associative arrays in ascending order,
                 // according to the value; arsort()->reverse
                 // output:
                 // Key=Peter, value=35
                 // Key=Ben, value=37
                 // Key=Gargulec, value=43


    ksort($age); // sort associative arrays in ascending order,
                 // according to the key; krsort()->reverse
                 // Key=Ben, value=37
                 // Key=Gargulec, value=43
                 // Key=Peter, value=35
?>

<?php //array_pop()
    $a=array("red", "green", "blue");
    array_pop($a);
    print_r($a);
?>

<?php
    $cars=["Bmw","Audi","Volvo"];
        echo "tablica: ";
    var_dump( $cars );
        echo "<br>Usuwamy ostatni element<br>";
    $deleted = array_pop( $cars );
    var_dump( $cars );
        echo "<br>Usunięty element: ";
    echo $deleted;
?>

<?php
    $a=array("red","green");
    array_push($a,"blue","yellow");
    print_r($a);
?>

<?php
    $b=array("a"=>"red","b"=>"green","c"=>"blue");
    echo array_shift($b) . "<br>";
    print_r($b);
?>

<?php
    $cars=["Bmw","Audi","Volvo"];
        echo "tablica: ";
    var_dump( $cars );
        echo "<br>Usuwamy pierwszy element<br>";
    $deleted = array_shift( $cars );
    var_dump( $cars );
        echo "<br>Usunięty element: ";
    echo $deleted;
?>

<?php
    $queue=["BMW","Volvo"];
        echo "Kolejka: ";
    var_dump( $queue );
        echo "<br>Dodajemy element na koniec<br>";
    array_push( $queue, "Toyota");
    var_dump( $queue );
    echo "usuwamy pierwszy element<br>";


    $deleted = array_shift( $queue );
    var_dump( $queue );
    echo "<br>Usunięty element: ". $deleted;
?>





























































