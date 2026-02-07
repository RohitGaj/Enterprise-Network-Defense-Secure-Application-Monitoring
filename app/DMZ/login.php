<?php
include 'db_config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Search for the user by email
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($user = $result->fetch_assoc()) {
        // Verify hashed password
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            echo "<script>alert('Login Successful! Welcome to the Internal Network.'); window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('Invalid Password.'); window.location.href='index.php';</script>";
        }
    } else {
        echo "<script>alert('No account found with that email.'); window.location.href='index.php';</script>";
    }

    $stmt->close();
    $conn->close();
}
?>