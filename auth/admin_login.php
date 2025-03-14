<?php
include '../db/connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM admins WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Login successful! Welcome, Admin.";
    } else {
        echo "Invalid credentials.";
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>
    <h2>Admin Login</h2>
    <form method="post">
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
