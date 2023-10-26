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


    $name = $_POST["name"];
    $email = $_POST["email"];


    $sql = "INSERT INTO MyGuests (firstname, email) VALUES ('$name', '$email')";
    echo $sql;
    if(mysqli_query($conn, $sql)){
        echo "New record created successfully";
    } else{
        echo "Error: " . $sql  . "<br>" . mysqli_error($conn);
    }


?>
