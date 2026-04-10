<?php
$conn = new mysqli("localhost", "root", "YOUR_PASSWORD", "login_system");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
