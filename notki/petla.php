<?php
// Pętla służy do wielokrotnego wykonywania instrukcji.

$x = 1;


while($x <= 5){
    echo "The number is: $x  <br>";
    $x++; // increment
}
?>

Pętla do while - w tej pętli instrukcje wewnątrz pętli są wykonane przynajmniej raz.

<?php
// Pętla do while - w tej pętli instrukcje wewnątrz pętli są wykonane przynajmniej raz

$x = 1;


do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);
?>

<?php
for ($x = 0; $x <= 5; $x++){
    echo "The number is: $x <br>";
}
?>

<?php
$colors = array("red", "green", "blue", "yellow");


foreach ($colors as $value){
    echo "$value <br>";
}
?>


<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");


foreach($age as $key => $val){
    echo "$key = $val <br>";
}
?>


<?php
$age = array("Pomidor"=>"12", "Burak"=>"5", "Ziemniak"=>"3", "Marchew"=>"4", "Sałata"=>"10");
echo "Cennik: <br>";
foreach($age as $key => $val){
    echo "$key = $val zł/kg <br>";
}
?>















