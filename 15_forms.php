
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.container {
  background-color: #ffffff;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  padding: 20px;
}

.login-form {
  max-width: 300px;
  margin: 0 auto;
}

h2 {
  text-align: center;
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

button {
  display: block;
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border: none;
  border-radius: 5px;
  background-color: #007bff;
  color: #fff;
  cursor: pointer;
}

button:hover {
  background-color: #0056b3;
}

  </style>
</head>
<body>
<?php
    // echo "<h1>This is for the form handling</h1>";
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        // ($_SERVER['REQUEST_METHOD']) it is used for the purpose of checking if the server method is set or not
        $email = $_POST['email'];
        $pass = $_POST['password'];
        echo "<div class='alert' role='alert'>Yes man we got your data your email is $email and password is $pass</div><br>";
    }

    // we can insert php script wherever we want and hence we have made it available here and we will make sure that it will be used in the future
?>

  <div class="container">
  <br>
  <hr>
    <form action="15_forms.php" method="post" class="login-form">
      <h2>Login</h2>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit">Submit</button>
    </form>
  </div>
</body>
</html>
