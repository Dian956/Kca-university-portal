<?php
include 'connect.php';

$create_table = "CREATE TABLE IF NOT EXISTS admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
)";

if ($conn->query($create_table) === TRUE) {
    echo "Admins table created successfully. <br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

$admin_name = "Admin";
$admin_email = "admin@kca.ac.ke";
$admin_password = md5("password123");

$insert_admin = "INSERT INTO admins (name, email, password) 
                 VALUES ('$admin_name', '$admin_email', '$admin_password') 
                 ON DUPLICATE KEY UPDATE email=email";

if ($conn->query($insert_admin) === TRUE) {
    echo "Admin user inserted successfully.<br>";
} else {
    echo "Error inserting admin: " . $conn->error . "<br>";
}

$conn->close();
?>
