<?php
    $servername = "localhost";
    $username = "admin";
    $password = "";
    $dbname = "tests";

    // $db = parse_url(getenv("DATABASE_URL"));
    $db["path"] = ltrim("d7f0r7ujubkpjv", "/");
    $db["host"] = "ec2-184-73-216-48.compute-1.amazonaws.com";
    $db["port"] = "5432";
    $db["user"] = "eqkxvbpikgdglt";
    $db["pass"] = "a1c8d39ed749cee09e2706576d18b9a39b369377ec979e2513beb334b1bb25c8";
    $conn = pg_connect(getenv("ec2-184-73-216-48.compute-1.amazonaws.com"));
    $pdo = new PDO("pgsql:" . sprintf(
        "host=%s;port=%s;user=%s;password=%s;dbname=%s",
        $db["host"],
        $db["port"],
        $db["user"],
        $db["pass"],
        $db["path"]
    ));

    // Create connection
    // $conn = new mysqli($servername, $username, $password, $dbname);
    // $conn = mysqli_connect($servername, $username, $password, $dbname); //Kết nối database.
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    mysqli_set_charset($con,'utf8');
    
    echo json_encode(["msg" => "abc"]);
?>