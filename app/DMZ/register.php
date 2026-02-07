<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $email = $_POST['email'];
    // Hash the password so a database leak doesn't reveal clear-text passwords
    $pass = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Prepare statement to prevent SQL Injection (Crucial for Security Lab)
    $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $user, $email, $pass);

    if ($stmt->execute()) {
        echo "<script>alert('Registration Successful!'); window.location.href='index.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>