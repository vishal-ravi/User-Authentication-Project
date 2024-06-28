<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "UserAuth";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            echo "<script>alert('Successfully logged in'); window.location.href = '../html/welcome.html';</script>";
        } else {
            echo "<script>alert('Invalid username or password'); window.location.href = '../html/index.html';</script>";
        }
    } else {
        echo "<script>alert('Invalid username or password'); window.location.href = '../html/index.html';</script>";
    }

    $conn->close();
}
?>
