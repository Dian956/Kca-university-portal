<?php
session_start();
include 'db/connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reg_number = $_POST['reg_number'];
    $password = $_POST['password'];

    $query = "SELECT * FROM students WHERE reg_number='$reg_number'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['student_id'] = $user['id'];
        header("Location: profile.php");
    } else {
        echo "Invalid login!";
    }
}
?>
<form method="POST">
    <input type="text" name="reg_number" placeholder="Registration Number">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Login</button>
</form>
