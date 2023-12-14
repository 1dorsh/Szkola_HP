<?php
    $a_bool = TRUE;
    $a_str = "foo";
    $an_int = 12;
    $pi = 3.141;


    echo gettype($a_bool);
    echo gettype($a_str);
?>

<?php
$a = 1234; //decimal number
$a = 0123; //octal number (equivalent to 83 decimal)
$a = 0o123; //octal number (as of PHP 8.1.0)
$a = 0x1A; //hexadecimal number (equivalent to 26 decimal)
$a = 0b11111111; //binary number (equivalent to 255 decimal)
$a = 1_234_567; //decimal number (as of PHP 7.4.0)
?>

<?php
    $a = 1.234;
    $b = 1.2e3; // 1.2*10**3
    $c = 7E-10; // 7*10**(-10)
    $d = 1_234.567; // as of PHP 7.4.0
?>


































