<?php
$conn = new mysqli("localhost", "root", "WJ28@krhps", "product_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>