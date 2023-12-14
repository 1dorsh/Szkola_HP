<?php
    function add_some_extra(&$string) {
            $string .= "and something extra";
    }
    $str = "This is a string ";
    add_some_extra($str);
    echo $str //outputs "This is a string and something extra"
?>

<?php
    function square($num){
        return $num * $num;
    }
    echo square(4);
?>

<?php
    function SUM($num1, $num2){
        return $num1 + $num2;
    }
    echo SUM(4,5);
?>

<?php
    echo preg_replace_callback('~-([a-z])~', function ($match){
        return strtoupper($match[1]);
    }, 'hello-world');
    // outputs helloworld
?>

<?php
    echo preg_replace_callback('~-([a-z])~', function ($match){
        return strtoupper($match[1]);
    }, 'hello-world');
    // outputs helloworld
?>

<?php
    function setHeight(int $minheight = 50){
        echo "The height is: $minheight <br>";
    }


    setHeight(350);
    setHeight(); // will use the default value of 50;
?>


<?php
    function familyName($fname) {
        echo "$fname Refsnes.<br>";
    }


    familyName("Jani");
    familyName("Hege");
    familyName("Stale");
?>





















