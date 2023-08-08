<?php
    // echo "This one is for updating purpose<br>";

    // lets connect to the database

    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "temp";
    $port = 3307;

    $conn = mysqli_connect($host, $user, $pass, $database, $port);

    if (!$conn){
        die("There has been problem while connecting to the database");
    }else{
        $sql = "UPDATE `contact_us` SET `Email` = 'vivekCheEmail@gmail.com' WHERE `Name` = 'Chintu baba';";

        $result = mysqli_query($conn, $sql);
        // here result will return either of the zero or one based on true or false value of the answer

        echo "Total Numbers of records affected after we updated the query are " . mysqli_affected_rows($conn) . "<br>";
        // mysqli_afftected_rows this function takes the conn object as input and it is used give us number of rows that are affected

        echo "<br>And the rows that are present there after updating are <br>";

        $sql = "SELECT * FROM `contact_us`";

        $result = mysqli_query($conn, $sql);

        $num = mysqli_num_rows($result);
        // mysqli_num_rows will check if there are any number of rows returned by the function or not

        // mysqli_fetch_assoc this function takes input the variable result and then returned the values in the form of array of key and value pair row wise which can be used in any of the loop
        if ($num > 0){
            $no = 1;

            while ($row = mysqli_fetch_assoc($result)){
                echo $no . ". " . $row['Name'] . "\t" . $row['Email'] . "\t" . $row['Query'] . "<br>";
                $no++;
            }
        }


    }
?>