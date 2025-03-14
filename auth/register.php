<?php
include '../db/connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "INSERT INTO students (name, email, password) VALUES ('$name', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful! <a href='admin_login.php'>Login here</a>";
    } else {
        echo "Error: " . $conn->error;
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h2>Student Registration</h2>
    <form method="post">
        <input type="text" name="name" placeholder="Full Name" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Register</button>
    </form>
</body>
</html>
