<?php

$servername = "localhost";
$username = "root"; // root
$password = ""; // ""


// create connections
$conn = mysqli_connect($servername, $username, $password);


$database="5ina28";


if(mysqli_select_db($conn, $database)) {
    echo "Database $database selected<br>";
} else {
    echo "Error select database: <br>" . mysqli_error($conn);
}


$firstname= $_POST["firstname"];
$lastname= $_POST["lastname"];
$vehicle1 = $_POST["vehicle1"];
$vehicle2 = $_POST["vehicle2"];


$sql = "INSERT INTO MyGuests (firstname, lastname, ) VALUES ('$firstname', '$lastname', '$vehicle1', '$vehicle2')";
if (mysqli_query($conn, $sql)){
    echo "New record created successfully";
} else{
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}
?>
