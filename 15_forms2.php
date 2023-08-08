<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Information</title>
</head>
<body>
  <a href="/cwh_tutorials/15_forms2.php"><h2>Enter Student Information</h2></a>
  <form action="15_forms2.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="roll_number">Roll Number:</label>
    <input type="text" id="roll_number" name="roll_number" required>

    <label for="marks">Marks:</label>
    <input type="number" id="marks" name="marks" min="0" max="100" required>

    <button type="submit">Submit</button>
  </form>
  <div>
    <?php

        $host = 'localhost';
        $user = 'root';
        $pass = "";
        $database = "temp";
        $port = 3307;

        $conn = mysqli_connect($host, $user, $pass, $database, $port);

        if (!$conn){
          die("There has been an error while connecting to the database");
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = $_POST['name'];
            $rno = $_POST['roll_number'];
            $marks = $_POST['marks'];

            $sql = "INSERT INTO `student_info` (`Name`, `Roll No`, `Marks`) VALUES ('$name ', '$rno', '$marks')";

            $result = mysqli_query($conn, $sql);

            if ($result){
              echo "Data added to the database successfully";
            }else{
              echo "There has been an error while adding the data";
            }

            header("localhost/cwh_tutorials/15_forms2.php");
            exit();

            // echo "<br> Hey $name it seems your roll number is $rno and you have scored $marks<br>";
            // we can add this into database which we will learn in the upcoming sessions
        }
    ?>
  </div>
</body>
</html>
