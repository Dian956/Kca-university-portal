<?php
include '../db/connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sender_id = $_POST['sender_id'];
    $message = $_POST['message'];

    $query = "INSERT INTO messages (sender_id, message) VALUES ('$sender_id', '$message')";
    mysqli_query($conn, $query);
}
?>
