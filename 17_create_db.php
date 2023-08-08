<?php
    echo "This is for creating database using code<br>";

    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "";
    $port = 3307;

    $conn = mysqli_connect($host, $user, $pass, $database, $port);

    // This is basic statement which is required to connect the page to server

    $sql = "CREATE DATABASE tempdb";
// This is simple sql query to create the database
    $result = mysqli_query($conn, $sql);
    // result will be either 0 or 1 based on the connection establishment

    if ($result){
        echo "Database has been created successfully<br>";
    }else{
        echo "There was error while creating as " . mysqli_error($conn);
        echo "<br>"; 
    }

    if (!$conn){
        die("There was error while connecting the database to the user");
    }else{
        echo "Connection to database has been established";
    }
?>