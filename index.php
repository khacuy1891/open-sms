<?php
    $servername = "localhost";
    $username = "admin";
    $password = "";
    $dbname = "tests";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
?>