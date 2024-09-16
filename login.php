<?php
session_start();
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Debugging connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare statement
    $stmt = $conn->prepare("SELECT password, name FROM user WHERE username = ?");
    
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    // Debugging result
    if ($stmt->num_rows === 1) {
        $stmt->bind_result($hashedPassword, $name);
        $stmt->fetch();

        if ($password === $hashedPassword) { 
            $_SESSION['loggedin'] = true;
            $_SESSION['role'] = 'admin'; 
            $_SESSION['name'] = $name;
            header("Location: dashboard.php");
            exit();
        } else {
            $error = "Invalid username or password.";
        }
    } else {
        $error = "Invalid username or password.";
    }

    $stmt->close();
    $conn->close();
}
?>

