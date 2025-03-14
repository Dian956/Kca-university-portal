<?php
session_start();
include 'db/connect.php';

// Ensure user is logged in
if (!isset($_SESSION['student_id'])) {
    die("You must be logged in to chat.");
}

$student_id = $_SESSION['student_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat with Staff</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<h2>Chat with a Lecturer</h2>
<div id="chat-box"></div>

<form id="chat-form">
    <input type="hidden" id="sender_id" value="<?= $student_id ?>">
    <input type="text" id="message" placeholder="Type your message">
    <button type="submit">Send</button>
</form>

<script src="assets/js/chat.js"></script>
</body>
</html>
