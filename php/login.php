<?php
// Step 1: Collect form data
$email = $_POST['email'];
$password = $_POST['password'];

// Step 2: Connect to the database
$servername = "localhost";
$username = "root";
$password_db = "";
$dbname = "web project";

$conn = new mysqli($servername, $username, $password_db, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 3: Query to check user
$sql = "SELECT * FROM users WHERE user_email = '$email' AND user_password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
    echo "<script>alert('Login successful!');</script>";
} else {
    echo "<script>alert('Invalid email or password.');</script>";
}

$conn->close();
?>