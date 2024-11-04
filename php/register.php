<?php
require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Hash password for security
    $password_hashed = password_hash($password, PASSWORD_BCRYPT);

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("sss", $username, $email, $password_hashed);

        if ($stmt->execute()) {
            header("Location: loginstyles.html");
            exit();
        } else {
            echo "Pendaftaran Gagal: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Pendaftaran Gagal: " . $conn->error;
    }
}

$conn->close();
