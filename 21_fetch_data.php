<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "temp";
    $port = 3307;

    $conn = mysqli_connect($host, $user, $password, $database, $port);

    if (!$conn){
        die("There was error while connecting to the database");
    }
    else{
        $sql = "SELECT * FROM `contact_us`";

        $result = mysqli_query($conn, $sql);

        // here the variable $result has number of rows that it has returned after it has got the answers from the database
        // hence to get them as in the area and then print them into the area where we want we will be needing it

        $rows_num = mysqli_num_rows($result);

        if ($rows_num > 0){
            while ($row = mysqli_fetch_assoc($result)){
                // This while loop will keep on executing the query and then it will be adding it to the echo chamber

                echo "Hello " . $row["Name"] . " it seems your email address is " . $row["Email"] . " and we have recived your query " . $row["Query"];
                echo "<br>";
            }
        }
    }


?>