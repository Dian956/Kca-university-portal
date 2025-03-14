<?php
session_start();
include 'db/connect.php';

$student_id = $_SESSION['student_id'];
$query = "SELECT * FROM students WHERE id='$student_id'";
$result = mysqli_query($conn, $query);
$student = mysqli_fetch_assoc($result);

echo "<h2>Welcome, " . $student['name'] . "</h2>";
echo "<p>Course: " . $student['course'] . "</p>";
echo "<p>Department: " . $student['department'] . "</p>";
?>
