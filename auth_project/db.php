<?php
$conn = new mysqli("localhost", "root", "WJ28@krhps", "auth_system");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>