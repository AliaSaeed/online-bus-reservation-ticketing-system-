<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password1'];

    // Replace 'your_username', 'your_password', and 'your_db_name' with your database credentials
    $mysqli = new mysqli('localhost', 'root', '', 'bus_reservation_db');

    // Check if the connection to the database is successful
    if ($mysqli->connect_error) {
        die('Connection failed: ' . $mysqli->connect_error);
    }

    // Check if the passwords match
    if ($_POST['password1'] !== $_POST['password2']) {
        header('Location: signup.php?error=1');
        exit();
    }

    // Use password_hash() to securely store the password in the database
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and execute the query to insert the data into the database
    $query = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('sss', $username, $email, $hashedPassword);
    $result = $stmt->execute();

    // Check if the insertion was successful
    if ($result) {
        // Redirect to a success page or login page
        header('Location: login.php');
        exit();
    } else {
        // Redirect back to the signup page with an error message
        header('Location: signup.php?error=2');
        exit();
    }

    // Close the database connection
    $stmt->close();
    $mysqli->close();
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup Page</title>
    <link rel="stylesheet" href="styles.css">
</head>

<style>
   body {
    background-color: lightblue;
    font-family: 'Poppins', sans-serif;
}

.container {
    max-width: 450px;
    margin: 0 auto;
    padding: 50px 35px;
    background-color: rgba(255, 255, 255, 0.13);
    border-radius: 10px;
    backdrop-filter: blur(10px);
    box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

h3 {
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    margin-bottom: 20px;
}

label {
    font-size: 16px;
    font-weight: 600;
    margin-top: 30px;
}

input {
    height: 40px;
    width: 100%;
    background-color: lightslategray;
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 2px;
    font-size: 14px;
    font-weight: 300;
}

button {
    margin-top: 14px;
    margin-bottom: 34px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: lightcyan;
}

</style>


<body>
    <div class="container">
        <form action="signup.php" method="post">
            <h3>Signup</h3>

            <label for="username">Username:</label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" placeholder="Enter Email" name="email" required>

            <label for="password1">Password:</label>
            <input type="password" placeholder="Enter Password (minimum 8 characters)" name="password1" required minlength="8">

            <label for="password2">Confirm Password:</label>
            <input type="password" placeholder="Confirm Password" name="password2" required minlength="8">

            <button type="submit" name="submit">Signup</button>
        </form>
    </div>
</body>
</html>
