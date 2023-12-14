<?php
    define("CONSTANT", "Hello World.");
    echo CONSTANT; //Outputs "Hello World."


    define("GREETING", "Hello you.", true);
    echo GREETING; //Outputs "Hello you."
    echo Greeting; //Outputs "Hello you." - nie działa
?>

<?php
    function test(){
        static $licznik=0;
        echo $licznik . "<br>";
        $licznik++;
    }
    test();
    test();
    test();
?>

<?php
    $foo = 'Bob'; // Assign value 'Bob' to $foo
    $bar = &$foo; // Reference $foo via $bar
    $bar = 'Andy';
    echo $bar;
    echo $foo; // $foo is altered too
?>
