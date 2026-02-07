<?php
// Configuration for VM3 (Internal Database Machine)
$host = '192.168.x.x'; // REPLACE with VM3's Internal IP address
$db   = 'user_db';
$user = 'web_user';
$pass = 'your_secure_password'; // The password you set in MariaDB/MySQL

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
?>