<?php
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
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $phone = $_POST['phone'];

    // Check if username already exists
    $sql = "SELECT id FROM users WHERE username='$username'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<script>alert('Username already exists'); window.location.href = '../html/index.html';</script>";
    } else {
        $sql = "INSERT INTO users (name, username, password, phone) VALUES ('$name', '$username', '$password', '$phone')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Successfully registered'); window.location.href = '../html/index.html';</script>";
        } else {
            echo "<script>alert('Error registering user'); window.location.href = '../html/index.html';</script>";
        }
    }

    $conn->close();
}
?>
