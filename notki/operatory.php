<?php
    $a = 3; //assignment
    $b = &$a; //b is a reference to a


    print "$a\n"; //prints 3
    print "$b\n"; //prints 3


    $a = 4; //change $a


    print "$a\n"; //prints 4
    print "$a\n"; //prints 4
?>

<?php
 
   $a = 5;
    $b = 3;
    echo "liczby a=$a, liczba b=$b <br>";
    echo "suma a+b = " . ($a + $b) ."<br>";
    echo "różnica a-b = " . ($a - $b) ."<br>";
    echo "iloczyn a*b = " .($a * $b) ."<br>";
    echo "iloraz a/b = " .($a / $b) ."<br>";
    echo "modulo a%b = " .($a % $b) . "<br>";
    echo "a do potęgi b = " .($a ** $b) ."<br>";
?>


<?php
    echo "<h3>Postincrement</h3>";
    $a = 5;
    echo "Should be 5: " . $a++ . "<br />\n";
    echo "Should be 6: " . $a . "<br />\n";


    echo "<h3>Preincrement</h3>";
    $a = 5;
    echo "Should be 6: " . ++$a . "<br />\n";
    echo "Should be 6: " . $a . "<br />\n";
?>

<?php
$a = 10;
$b = 5;
if ($a > $b)
    echo "a is bigger than b";
echo "after if";
?>


<?php
$a = 10;
$b = 5;
if ($a > $b){
    echo "a is bigger than b";
    echo "second text";
}
echo "after if";
?>

<?php
$hour = date("H"); //get the current time


if ($hour < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>

<?php
$favcolor = "red";


switch ($favcolor) {
    case "red":
        echo "Your Favorite color is red: ";
        break;
    case "blue":
        echo "Your Favorite color is blue: ";
        break;


    default:
        echo "Your Favorite color is neither red, blue, nor green!";
}
?>
















































