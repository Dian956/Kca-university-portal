<?php
include '../db/connect.php';

$query = "SELECT * FROM messages ORDER BY timestamp DESC";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<p><strong>User {$row['sender_id']}:</strong> {$row['message']} <em>({$row['timestamp']})</em></p>";
}
?>
