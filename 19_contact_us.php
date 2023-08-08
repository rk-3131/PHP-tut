<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        input,
        textarea,
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            resize: vertical;
        }

        button {
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="handler">
        <?php
            $host = "localhost";
            $user = "root";
            $password = "";
            $database = "temp";
            $port = 3307;

            $conn = mysqli_connect($host, $user, $password, $database, $port);

            if (!$conn){
                die("There was an error while connecting to database");
            }else{
                if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $desc = $_POST['query'];
                    $sql = "INSERT INTO `contact_us` (`Name`, `Email`, `Query`) VALUES ('$name', '$email', '$desc')";
                    $result = mysqli_query($conn, $sql);
                    if ($result){
                        echo "Submitted to the database";
                    }else{
                        echo "Error while adding it to database";
                    }
                }
            }
        ?>
    </div>
    <div class="container">
        <h2>Contact Us</h2>
        <form action="19_contact_us.php" method = "post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Your Name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Your Email" required>

            <label for="query">Query:</label>
            <textarea id="query" name="query" rows="4" placeholder="Your Query" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>

    <div class="result">
        <?php
            $host = "localhost";
            $user = "root";
            $password = "";
            $database = "temp";
            $port = 3307;

            $conn = mysqli_connect($host, $user, $password, $database, $port);

            if (!$conn){
                die("There has been an error while connecting to the database");
            }
            else{
                $sql = "SELECT * FROM `contact_us`";

                $result = mysqli_query($conn, $sql);

                // now we will check if we have got the more than zero number of rows or not 
                // if yes then we will move onto the next phase

                $num_rows = mysqli_num_rows($result);

                if ($num_rows > 0){
                    // we will iterrate through the databse and then retrieve the database
                    while ($row = mysqli_fetch_assoc($result)){
                        echo "Hey " . $row["Name"] . " with email " . $row["Email"] . " got your problem buddy as " . $row["Query"];
                        echo "<br>";
                    }
                }
            }

        ?>
    </div>
</body>

</html>
