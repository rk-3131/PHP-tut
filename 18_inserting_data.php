<?php
    // echo "Php file has been loaded<br>";

    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "temp";
    $port = 3307;

    $conn = mysqli_connect($host, $user, $pass, $database, $port);

    if (!$conn){
        die("Error while connecting to database");
    }else{
        echo "Connection to database has been successfully done";
    }

    echo "<br>";

    $name = "Dummy";
    $rno = 1;
    $marks = 99;

    $sql = "INSERT INTO `testing` (`Name`, `RollNo`, `Marks`) VALUES ('$name', '$rno', '$marks')";

    $result = mysqli_query($conn, $sql);

    if ($result){
        echo "The data has been added to the database successfully";
    }else{
        echo "Error while adding data to the database";
    }
?>