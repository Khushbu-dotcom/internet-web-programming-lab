<?php
$conn = new mysqli("localhost", "root", "YOUR_PASSWORD", "auth_system");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
