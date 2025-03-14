<?php
session_start();
include 'db/connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = $_SESSION['student_id'];
    $message = $_POST['message'];

    $query = "INSERT INTO complaints (student_id, message, status) VALUES ('$student_id', '$message', 'Pending')";
    mysqli_query($conn, $query);

    echo "Complaint submitted!";
}
?>
