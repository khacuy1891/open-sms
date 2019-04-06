<?php
    $servername = "localhost";
    $username = "admin";
    $password = "";
    $dbname = "tests";

    // Create connection
    // $conn = new mysqli($servername, $username, $password, $dbname);
    $conn = mysqli_connect($servername, $username, $password, $dbname); //Kết nối database.
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
	mysqli_set_charset($con,'utf8');
?>