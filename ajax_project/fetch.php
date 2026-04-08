<?php
$conn = new mysqli("localhost", "root", "WJ28@krhps", "ajax_db");

$q = $_GET['q'];

// Fetch matching records
$sql = "SELECT * FROM students WHERE name LIKE '%$q%'";
$result = $conn->query($sql);

echo "<table border='1' cellpadding='10'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Course</th>
</tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['course']}</td>
    </tr>";
}

echo "</table>";
?>