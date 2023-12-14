<?php
    echo 'This is a simple string';


    echo 'You cant also have embedded newlines in
    strings this way as it is
    okay to do';
?>

<?php
   // Outputs: Arnold once said: "i'll be back"
   echo 'Arnold once said: "i\'ll be back"<br>';


   // Outputs: You deleted C:\*.*?
   echo 'You deleted C:\\*.*?';
?>

<?php
   // Outputs: This will not expand: \n a newline
   echo "This will not expand: \n a newline";
?>

<?php
   $Number=5;
   // Outputs: Variable value is not expand
   echo 'Variable value is $Number';
   echo "Variable value = $Number";
?>

<?php
    echo strlen( "Hello World" ); //outputs 12
    echo strlen(" Łódź" ); //outputs 7
    // polskie znaki w unicode zajmują dwa bajty


    echo mb_strlen( "Łódź" ); //outputs 4
?>

<?php
   echo str_word_count("Hello world!"); //outputs 2
?>

<?php
    echo str_replace("World", "Dolly", "Hello World!");
    //outputs Hello Dolly!
?>















































