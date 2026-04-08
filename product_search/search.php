<?php
include 'db.php';

$q = $_GET['q'];

$sql = "SELECT * FROM products WHERE name LIKE '%$q%'";

$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    echo "Name: " . $row['name'] . "<br>";
    echo "Category: " . $row['category'] . "<br>";
    echo "Price: ₹" . $row['price'] . "<br>";
    echo "<hr>";
}
?>