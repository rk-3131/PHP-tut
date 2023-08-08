<?php
    // echo "This one is for deleting<br>";

    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "temp";
    $port = 3307;

    $conn = mysqli_connect($host, $user, $pass, $database, $port);

    if (!$conn){
        die("There is error while connecting to the database");
    }else{
        $sql = "SELECT * FROM `contact_us`";
        echo "The data before deleting of the data is <br>";

        $result = mysqli_query($conn, $sql);

        $num = mysqli_num_rows($result);
        $no = 1;
        if ($num > 0){
            while ($row = mysqli_fetch_assoc($result)){
                echo $no . " " . $row['Name'] . "\t" . $row['Email'] . "<br>";
                $no++;
            }
        }

        $sql = "DELETE FROM `contact_us` WHERE `contact_us`.`Name` = 'Asus'";

        $result = mysqli_query($conn, $sql);

        if ($result){
            echo "Deleted successfully<br>";
        }else{
            echo "Some error while deleting<br>";
        }
        echo "<br>";
        echo "<br>";
        echo "<br>";
        $sql = "SELECT * FROM `contact_us`";
        echo "The data after deleting of the data is <br>";

        $result = mysqli_query($conn, $sql);

        $num = mysqli_num_rows($result);
        $no = 1;
        if ($num > 0){
            while ($row = mysqli_fetch_assoc($result)){
                echo $no . " " . $row['Name'] . "\t" . $row['Email'] . "<br>";
                $no++;
            }
        }



    }
?>