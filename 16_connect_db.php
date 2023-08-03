<?php
    echo "Here we will connect to database";
    echo "<br>";

    // ways to connect to mysql database
    // 1. mysqli extenison:  it is specific to mysql
        // a. procedural
        $host = "localhost";
        // $port = 3307;
        $username = "root";
        $password = "";
        


        // create a connection

        $conn = mysqli_connect($host, $username, $password);

        if (!$conn){
            die("Sorry connection establishment failed" . mysqli_connect_error());
        }

        // echo "Connection was successful";
        // b. object oriented
    // 2. PDO:  it works with large number of database
?>